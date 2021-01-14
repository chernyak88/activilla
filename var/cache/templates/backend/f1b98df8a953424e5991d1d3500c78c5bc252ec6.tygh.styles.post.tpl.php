<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:12:40
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\help_center\hooks\index\styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17252562645ffffcf8885eb4-96772931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1b98df8a953424e5991d1d3500c78c5bc252ec6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\styles.post.tpl',
      1 => 1610437054,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17252562645ffffcf8885eb4-96772931',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffcf888f4c4_33556338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffcf888f4c4_33556338')) {function content_5ffffcf888f4c4_33556338($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.style.php';
?><?php if (@constant('ACCOUNT_TYPE')==="admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
