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


namespace Tygh\Addons\CommerceML\Commands;


/**
 * Class ExportOrdersCommand
 *
 * @package Tygh\Addons\CommerceML\Commands
 *
 * @see \Tygh\Addons\CommerceML\Commands\ExportOrdersCommandHandler
 */
class ExportOrdersCommand
{
    /**
     * @var int
     */
    public $company_id;

    /**
     * @var array<string>
     */
    public $orders_statuses;

    /**
     * Creates command instance
     *
     * @param int                                  $company_id Company identifier
     * @param array<string, int|string|bool|array> $settings   Settings
     *
     * @return \Tygh\Addons\CommerceML\Commands\ExportOrdersCommand
     */
    public static function create($company_id, $settings)
    {
        $self = new self();

        $self->company_id = $company_id;
        $self->orders_statuses = $settings['orders_exporter.statuses_filter'];

        return $self;
    }
}
