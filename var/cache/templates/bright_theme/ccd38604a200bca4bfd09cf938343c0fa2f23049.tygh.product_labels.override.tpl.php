<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:09:50
         compiled from "C:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\activilla\hooks\products\product_labels.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16235326555ffffc4e9dbf53-58730562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccd38604a200bca4bfd09cf938343c0fa2f23049' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\activilla\\hooks\\products\\product_labels.override.tpl',
      1 => 1610527409,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16235326555ffffc4e9dbf53-58730562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_shipping_label' => 0,
    'product' => 0,
    'product_labels_mini' => 0,
    'product_labels_static' => 0,
    'product_labels_rounded' => 0,
    'show_discount_label' => 0,
    'show_price_values' => 0,
    'label_text' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffc4ea1a038_68422181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffc4ea1a038_68422181')) {function content_5ffffc4ea1a038_68422181($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('free_shipping','free_shipping'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['show_shipping_label']->value&&$_smarty_tpl->tpl_vars['product']->value['free_shipping']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('label_meta'=>"ty-product-labels__item--shipping",'label_text'=>$_smarty_tpl->__("free_shipping"),'label_mini'=>$_smarty_tpl->tpl_vars['product_labels_mini']->value,'label_static'=>$_smarty_tpl->tpl_vars['product_labels_static']->value,'label_rounded'=>$_smarty_tpl->tpl_vars['product_labels_rounded']->value), 0);?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['show_discount_label']->value&&($_smarty_tpl->tpl_vars['product']->value['discount_prc']||$_smarty_tpl->tpl_vars['product']->value['list_discount_prc'])&&$_smarty_tpl->tpl_vars['show_price_values']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['discount']) {?>
        <?php $_smarty_tpl->tpl_vars['label_text'] = new Smarty_variable("-".((string)$_smarty_tpl->tpl_vars['product']->value['discount_prc'])."%", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['label_text'] = new Smarty_variable("-".((string)$_smarty_tpl->tpl_vars['product']->value['list_discount_prc'])."%", null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('label_meta'=>"ty-product-labels__item--discount",'label_text'=>$_smarty_tpl->tpl_vars['label_text']->value,'label_mini'=>$_smarty_tpl->tpl_vars['product_labels_mini']->value,'label_static'=>$_smarty_tpl->tpl_vars['product_labels_static']->value,'label_rounded'=>$_smarty_tpl->tpl_vars['product_labels_rounded']->value), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/activilla/hooks/products/product_labels.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/activilla/hooks/products/product_labels.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_shipping_label']->value&&$_smarty_tpl->tpl_vars['product']->value['free_shipping']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('label_meta'=>"ty-product-labels__item--shipping",'label_text'=>$_smarty_tpl->__("free_shipping"),'label_mini'=>$_smarty_tpl->tpl_vars['product_labels_mini']->value,'label_static'=>$_smarty_tpl->tpl_vars['product_labels_static']->value,'label_rounded'=>$_smarty_tpl->tpl_vars['product_labels_rounded']->value), 0);?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['show_discount_label']->value&&($_smarty_tpl->tpl_vars['product']->value['discount_prc']||$_smarty_tpl->tpl_vars['product']->value['list_discount_prc'])&&$_smarty_tpl->tpl_vars['show_price_values']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['discount']) {?>
        <?php $_smarty_tpl->tpl_vars['label_text'] = new Smarty_variable("-".((string)$_smarty_tpl->tpl_vars['product']->value['discount_prc'])."%", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['label_text'] = new Smarty_variable("-".((string)$_smarty_tpl->tpl_vars['product']->value['list_discount_prc'])."%", null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('label_meta'=>"ty-product-labels__item--discount",'label_text'=>$_smarty_tpl->tpl_vars['label_text']->value,'label_mini'=>$_smarty_tpl->tpl_vars['product_labels_mini']->value,'label_static'=>$_smarty_tpl->tpl_vars['product_labels_static']->value,'label_rounded'=>$_smarty_tpl->tpl_vars['product_labels_rounded']->value), 0);?>

<?php }
}?><?php }} ?>
