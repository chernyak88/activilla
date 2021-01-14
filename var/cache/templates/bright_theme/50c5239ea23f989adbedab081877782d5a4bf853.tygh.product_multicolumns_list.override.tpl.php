<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 16:05:26
         compiled from "C:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\activilla\hooks\products\product_multicolumns_list.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15669750255ffffc522db8f1-62462589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50c5239ea23f989adbedab081877782d5a4bf853' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\activilla\\hooks\\products\\product_multicolumns_list.override.tpl',
      1 => 1610629497,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15669750255ffffc522db8f1-62462589',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffc52372288_20019567',
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'product_labels' => 0,
    'show_add_to_cart' => 0,
    'add_to_cart' => 0,
    'rating' => 0,
    'category' => 0,
    'item_number' => 0,
    'cur_number' => 0,
    'name' => 0,
    'old_price' => 0,
    'price' => 0,
    'clean_price' => 0,
    'list_discount' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffc52372288_20019567')) {function content_5ffffc52372288_20019567($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-grid-list__image">
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_gallery'=>true), 0);?>


    <?php $_smarty_tpl->tpl_vars["product_labels"] = new Smarty_variable("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value];?>


    <?php $_smarty_tpl->_capture_stack[0][] = array("product_multicolumns_list_control_data_wrapper", null, null); ob_start(); ?>
        <div class="ty-grid-list__control">
            <?php $_smarty_tpl->_capture_stack[0][] = array("product_multicolumns_list_control_data", null, null); ob_start(); ?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_multicolumns_list_control")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
                    <div class="button-container">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']||$_smarty_tpl->tpl_vars['product']->value['variation_feature_collection']) {?>
                            <i class="ty-icon-cross"></i>
                        <?php } else { ?>
                            <i class="ty-icon-cart"></i>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars['add_to_cart'] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

                    </div>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data'];?>

        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if (trim(Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data'])) {?>
        <?php echo Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data_wrapper'];?>

    <?php }?>
</div>

<?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
<?php if (Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value]) {?>
    <div class="grid-list__rating">
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>

    </div>
<?php }?>

<?php $_smarty_tpl->tpl_vars['category'] = new Smarty_variable(fn_get_category_data(strval($_smarty_tpl->tpl_vars['product']->value['main_category'])), null, 0);?>
<span class="ty-grid-list__item-category"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span>

<div class="ty-grid-list__item-name">
    <?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?>
        <span class="item-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
.&nbsp;</span>
        <?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);?>

    <?php }?>

    <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <bdi><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>
</bdi>
</div>

<div class="ty-grid-list__price <?php if ($_smarty_tpl->tpl_vars['product']->value['price']==0) {?>ty-grid-list__no-price<?php }?>">
    <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];
}?>

    <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>


    <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>


    <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>

</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/activilla/hooks/products/product_multicolumns_list.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/activilla/hooks/products/product_multicolumns_list.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-grid-list__image">
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_gallery'=>true), 0);?>


    <?php $_smarty_tpl->tpl_vars["product_labels"] = new Smarty_variable("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value];?>


    <?php $_smarty_tpl->_capture_stack[0][] = array("product_multicolumns_list_control_data_wrapper", null, null); ob_start(); ?>
        <div class="ty-grid-list__control">
            <?php $_smarty_tpl->_capture_stack[0][] = array("product_multicolumns_list_control_data", null, null); ob_start(); ?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_multicolumns_list_control")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
                    <div class="button-container">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options']||$_smarty_tpl->tpl_vars['product']->value['variation_feature_collection']) {?>
                            <i class="ty-icon-cross"></i>
                        <?php } else { ?>
                            <i class="ty-icon-cart"></i>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars['add_to_cart'] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>

                    </div>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data'];?>

        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if (trim(Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data'])) {?>
        <?php echo Smarty::$_smarty_vars['capture']['product_multicolumns_list_control_data_wrapper'];?>

    <?php }?>
</div>

<?php $_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
<?php if (Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value]) {?>
    <div class="grid-list__rating">
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>

    </div>
<?php }?>

<?php $_smarty_tpl->tpl_vars['category'] = new Smarty_variable(fn_get_category_data(strval($_smarty_tpl->tpl_vars['product']->value['main_category'])), null, 0);?>
<span class="ty-grid-list__item-category"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span>

<div class="ty-grid-list__item-name">
    <?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?>
        <span class="item-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
.&nbsp;</span>
        <?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);?>

    <?php }?>

    <?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <bdi><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>
</bdi>
</div>

<div class="ty-grid-list__price <?php if ($_smarty_tpl->tpl_vars['product']->value['price']==0) {?>ty-grid-list__no-price<?php }?>">
    <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];
}?>

    <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>


    <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>


    <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>

</div><?php }?><?php }} ?>
