<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:15:34
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\social_buttons\hooks\products\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8595403375ffffda632d033-78510544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5107e8f6105e075de8f8952b46d8a8307f8b47f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\social_buttons\\hooks\\products\\detailed_content.post.tpl',
      1 => 1610437065,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8595403375ffffda632d033-78510544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffda63335d0_34487462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffda63335d0_34487462')) {function content_5ffffda63335d0_34487462($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"product_data",'object_data'=>$_smarty_tpl->tpl_vars['product_data']->value), 0);?>

<?php }?>
<?php }} ?>
