<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:15:36
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\discussion\hooks\products\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18950743435ffffda83f96a4-57754053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2b73b236d15ba25796f07fed7a929ee00d72952' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\discussion\\hooks\\products\\tabs_content.post.tpl',
      1 => 1610437051,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18950743435ffffda83f96a4-57754053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffda8400981_63653497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffda8400981_63653497')) {function content_5ffffda8400981_63653497($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id']), 0);?>

<?php }?>
<?php }} ?>
