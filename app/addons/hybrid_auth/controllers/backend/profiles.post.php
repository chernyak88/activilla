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

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode === 'update') {
    $providers_list = fn_hybrid_auth_get_providers_list();
    Tygh::$app['view']->assign('providers_list', $providers_list);

    if (!empty($_REQUEST['user_id'])) {
        $linked_providers = fn_hybrid_auth_get_link_provider($_REQUEST['user_id']);
        Tygh::$app['view']->assign('linked_providers', $linked_providers);
    }

}
