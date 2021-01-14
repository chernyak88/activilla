<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:16:39
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\product_features\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12160283835ffffde7d1a895-63124869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fda6994356542210d393e12e25197a6b6d8a8aa6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\product_features\\components\\bulk_edit\\actions.tpl',
      1 => 1610437085,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12160283835ffffde7d1a895-63124869',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffde7d22eb7_42245729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffde7d22eb7_42245729')) {function content_5ffffde7d22eb7_42245729($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('delete_selected','create_filters'));
?>
<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'text'=>$_smarty_tpl->__("delete_selected"),'dispatch'=>"dispatch[product_features.m_delete]",'form'=>"manage_product_features_form"));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("create_filters"),'dispatch'=>"dispatch[product_filters.m_create_by_features]",'form'=>"manage_product_features_form"));?>

</li>
<?php }} ?>
