<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:16:43
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\seo\hooks\product_features\extended_feature.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3034339095ffffdebae7801-31524937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f40e1a03aa279b30efeba433cc6b23a46b6c8d3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\seo\\hooks\\product_features\\extended_feature.post.tpl',
      1 => 1610437065,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3034339095ffffdebae7801-31524937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feature_type' => 0,
    'runtime' => 0,
    'var' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffdebaf40e7_91518917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffdebaf40e7_91518917')) {function content_5ffffdebaf40e7_91518917($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php if ($_smarty_tpl->tpl_vars['feature_type']->value==smarty_modifier_enum("ProductFeatures::EXTENDED")&&($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR"))) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['var']->value,'object_name'=>"feature_data[variants][".((string)$_smarty_tpl->tpl_vars['num']->value)."]",'hide_title'=>true,'object_id'=>$_smarty_tpl->tpl_vars['var']->value['variant_id'],'object_type'=>"e"), 0);?>

<?php }?><?php }} ?>
