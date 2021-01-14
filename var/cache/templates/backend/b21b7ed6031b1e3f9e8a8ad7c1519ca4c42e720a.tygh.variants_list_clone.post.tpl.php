<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:16:43
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\yml_export\hooks\product_features\variants_list_clone.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7116820595ffffdeb9b5677-77427676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b21b7ed6031b1e3f9e8a8ad7c1519ca4c42e720a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\yml_export\\hooks\\product_features\\variants_list_clone.post.tpl',
      1 => 1610437070,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7116820595ffffdeb9b5677-77427676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffdeb9b8d90_08860212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffdeb9b8d90_08860212')) {function content_5ffffdeb9b8d90_08860212($_smarty_tpl) {?><td>
    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][yml2_unit]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['yml2_unit'], ENT_QUOTES, 'UTF-8');?>
" class="span2">
</td>
<?php }} ?>
