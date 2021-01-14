<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:15:38
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\vendor_communication\hooks\products\update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6881286615ffffdaa085d53-41565632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd18f3bc38ec985fdfcdd5da011a2e3440b345fe3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\vendor_communication\\hooks\\products\\update_tools_list.post.tpl',
      1 => 1610437067,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6881286615ffffdaa085d53-41565632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffdaa08b001_13437652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffdaa08b001_13437652')) {function content_5ffffdaa08b001_13437652($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>@constant('VC_OBJECT_TYPE_PRODUCT'),'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'menu_button'=>true,'divider'=>true), 0);?>
<?php }} ?>
