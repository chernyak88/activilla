<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/


namespace Tygh\Addons\CommerceML\Storages;


use Tygh\Addons\CommerceML\Dto\OrderDto;
use Tygh\Common\OperationResult;
use Tygh\Web\Session;
use Tygh\Registry;
use Tygh\Enum\SiteArea;
use Tygh\Enum\ShippingCalculationTypes;
use Tygh\Enum\OptionsCalculationTypes;

/**
 * Class OrderStorage
 *
 * @package Tygh\Addons\CommerceML\Storages
 */
class OrderStorage
{
    /**
     * @var string
     */
    private $default_language_code;

    /**
     * @var \Tygh\Web\Session
     */
    private $session;

    /**
     * @var string
     */
    private $default_currency;

    /**
     * @var array<string, array<string, int|string|float>>
     */
    private $currencies;

    /**
     * ProductStorage constructor.
     *
     * @param \Tygh\Web\Session                              $session               Session
     * @param string                                         $default_language_code Default language code
     * @param array<string, array<string, int|string|float>> $currencies            List currencies
     * @param string                                         $default_currency      Default currency
     */
    public function __construct(
        Session $session,
        $default_language_code,
        array $currencies,
        $default_currency
    ) {
        $this->session = $session;
        $this->default_language_code = $default_language_code;
        $this->currencies = $currencies;
        $this->default_currency = $default_currency;
    }

    /**
     * @param array<string, int|string|array> $order_data Order data
     *
     * @return array<string, array|int|string>
     */
    public function fillContactInfoFromAddress($order_data)
    {
        return fn_fill_contact_info_from_address($order_data);
    }

    /**
     * Gets orders by params
     *
     * @param array<string, string|bool|int|array> $params Params to get orders
     *
     * @return array<array<string, int|string|array>>
     */
    public function getOrders(array $params)
    {
        return fn_get_orders($params);
    }

    /**
     * Gets order info
     *
     * @param int $order_id Order identifier
     *
     * @return array<string, int|string|array>|false
     */
    public function getOrderInfo($order_id)
    {
        return fn_get_order_info($order_id);
    }

    /**
     * Updates order
     *
     * @param array<string, int|string|array<int, string|int|array>> $order_data    Order data
     * @param int                                                    $order_id      Order identifier
     * @param bool                                                   $notify_user   Flag to notify user while the updating order
     * @param string                                                 $error_message Error message string
     *
     * @return \Tygh\Common\OperationResult
     */
    public function updateOrder(array $order_data, $order_id, $notify_user, $error_message)
    {
        $result = false;

        $cart = [];

        $auth = fn_fill_auth([], [], false, SiteArea::VENDOR_PANEL);

        fn_clear_cart($cart, true);
        fn_form_cart($order_id, $cart, $auth);

        $cart = array_merge($cart, $order_data);

        $cart['calculate_shipping'] = false;
        $cart['shipping_required'] = false;
        $cart['product_groups'] = [];

        $auth['area'] = SiteArea::ADMIN_PANEL;

        fn_calculate_cart_content(
            $cart,
            $auth,
            ShippingCalculationTypes::SKIP_CALCULATION,
            false,
            OptionsCalculationTypes::FULL,
            false
        );

        $cart['shipping_failed'] = false;
        $cart['company_shipping_failed'] = false;
        $cart['shipping_cost'] = $order_data['shipping_cost'];
        $cart['total'] = $order_data['total'];

        foreach ($cart['shipping'] as &$shipping) {
            $shipping['rates'] = [$order_data['shipping_cost']];
        }
        unset($shipping);

        foreach ($cart['product_groups'] as &$product_group) {
            if (empty($product_group['chosen_shippings'])) {
                $product_group['chosen_shippings'] = [reset($product_group['shippings'])];
            }

            foreach ($product_group['chosen_shippings'] as &$shipping) {
                $shipping['rate'] = $order_data['shipping_cost'];
            }
            unset($shipping);
        }
        unset($product_group);

        Registry::set('runtime.company_id', $order_data['company_id']);

        list($order_id, $order_status) = fn_update_order($cart, $order_id);

        if ($order_id) {
            $customer_notifications = $notify_user
                ? fn_get_notification_rules(['notify_user' => true])
                : fn_get_notification_rules([], true);

            fn_change_order_status(
                $order_id,
                $order_status,
                '',
                $customer_notifications
            );

            $result = true;
        }

        return OperationResult::wrap(static function () use ($result) {
            return $result;
        }, $error_message);
    }

    /**
     * Updates order status
     *
     * @param \Tygh\Addons\CommerceML\Dto\OrderDto $order      Order Dto
     * @param string                               $new_status New order status
     * @param string                               $old_status Old order status
     *
     * @return bool
     */
    public function updateOrderStatus(OrderDto $order, $new_status, $old_status)
    {
        $customer_notifications = fn_get_notification_rules(['notify_user' => true]);

        fn_change_order_status(
            (int) $order->id->local_id,
            $new_status,
            $old_status,
            $customer_notifications
        );

        return true;
    }

    /**
     * Gets order data by order identifier
     *
     * @param int $id Order identifier
     *
     * @return array<string, string|int>|false
     */
    public function getOrderData($id)
    {
        $order_id = (int) $id;

        return fn_get_order_info($order_id);
    }

    /**
     * Gets order status code by status description
     *
     * @param string $status_string Status string
     *
     * @return string
     */
    public function getOrderStatusByDescription($status_string)
    {
        return db_get_field(
            'SELECT status FROM ?:statuses AS statuses'
            . ' LEFT JOIN ?:status_descriptions AS status_descriptions ON statuses.status_id = status_descriptions.status_id'
            . ' WHERE status_descriptions.description = ?s AND lang_code = ?s',
            $status_string,
            $this->default_language_code
        );
    }

    /**
     * Checks if order was changed
     *
     * @param array<string, string|int|array<int, string|int|array>> $order_data         New order data
     * @param array<string, string|int|array>                        $current_order_data Current order data
     *
     * @return bool
     */
    private function isOrderProductsChanged(array $order_data, array $current_order_data)
    {
        if (!empty(array_diff(array_keys((array) $current_order_data['products']), array_keys((array) $order_data['products'])))) {
            return true;
        }

        /** @var array<string, string|int|array<string, int|string>> $order_data['products'] */
        foreach ((array) $order_data['products'] as $product_id => $product_data) {
            if (empty(array_diff_assoc((array) $product_data, $current_order_data['products'][$product_id]))) {
                continue;
            }

            return true;
        }

        return false;
    }

    /**
     * Gets the float value rounded to the number of digits after decimal point specified for the primary currency.
     *
     * @param float $value Value
     *
     * @return float
     */
    private function getRoundedUpPrice($value)
    {
        return round($value, (int) $this->currencies[$this->default_currency]['decimals']);
    }
}
