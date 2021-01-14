<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:15:32
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\products\components\products_update_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18184119025ffffda4ad78c0-56913546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4e341f48aa6c5fea93ef1ede3ccac3ad60b76f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\products\\components\\products_update_features.tpl',
      1 => 1610437087,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18184119025ffffda4ad78c0-56913546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'product_id' => 0,
    'features_search' => 0,
    'product_data' => 0,
    'product_features' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffda4b070e3_59263944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffda4b070e3_59263944')) {function content_5ffffda4b070e3_59263944($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_feature','no_items'));
?>
<div id="content_features" class="hidden products__features">
    <?php echo smarty_function_script(array('src'=>"js/tygh/backend/products/products_update_features.js"),$_smarty_tpl);?>


    <?php if (fn_check_permissions("products","update_feature","admin","POST")&&fn_check_permissions("product_features","quick_add","admin","POST")) {?>
        <div class="control-toolbar cm-toggle-button">
            <div class="control-toolbar__btns">
                <div class="control-toolbar__btns-right">
                    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'id'=>"add_feature_".((string)$_smarty_tpl->tpl_vars['id']->value),'text'=>$_smarty_tpl->__("add_feature"),'icon_first'=>true,'icon'=>"icon-plus",'class'=>"btn cm-inline-dialog-opener cm-hide-with-inputs",'data'=>array("data-ca-inline-dialog-container"=>"product_features_quick_add_feature")));?>

                </div>
            </div>
            <div class="control-toolbar__panel">
                <div id="product_features_quick_add_feature"
                     data-ca-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                     data-ca-target-id="products_update_features_content"
                     data-ca-return-url="<?php echo htmlspecialchars(rawurlencode(fn_url("products.get_features?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['features_search']->value['items_per_page']))), ENT_QUOTES, 'UTF-8');?>
"
                     data-ca-inline-dialog-action-context="products_update_features"
                     data-ca-inline-dialog-url="<?php ob_start();
echo htmlspecialchars(http_build_query(array("category_ids"=>array_values((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['category_ids'])===null||$tmp==='' ? array() : $tmp)))), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php echo htmlspecialchars(fn_url("product_features.quick_add?category_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['main_category'])."&".$_tmp3), ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>
        </div>
    <?php }?>
    <div id="products_update_features_content">
        <?php if ($_smarty_tpl->tpl_vars['product_features']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('search'=>$_smarty_tpl->tpl_vars['features_search']->value,'div_id'=>"product_features_pagination_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'current_url'=>fn_url("products.get_features?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['features_search']->value['items_per_page'])),'disable_history'=>true), 0);?>


            <fieldset>
                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_assign_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_features'=>$_smarty_tpl->tpl_vars['product_features']->value), 0);?>

            </fieldset>

            <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('search'=>$_smarty_tpl->tpl_vars['features_search']->value,'div_id'=>"product_features_pagination_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'current_url'=>fn_url("products.get_features?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['features_search']->value['items_per_page'])),'disable_history'=>true), 0);?>


        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
        <?php }?>
    <!--products_update_features_content--></div>
</div><?php }} ?>
