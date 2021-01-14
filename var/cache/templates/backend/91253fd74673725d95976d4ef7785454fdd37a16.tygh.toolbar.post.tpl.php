<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:13:01
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\help_center\hooks\index\toolbar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21185199155ffffd0d2deac8-63101401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91253fd74673725d95976d4ef7785454fdd37a16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\toolbar.post.tpl',
      1 => 1610437054,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21185199155ffffd0d2deac8-63101401',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffd0d2e32e5_62981068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffd0d2e32e5_62981068')) {function content_5ffffd0d2e32e5_62981068($_smarty_tpl) {?><?php if (@constant('ACCOUNT_TYPE')==="admin") {?>
    <div class="help-center__toolbar help-center__toolbar--hidden">
        <a class="btn help-center__show-help-center" href="#">
            <i class="help-center__show-help-center--icon icon-question-sign"></i>
        </a>
    </div>
<?php }?>
<?php }} ?>
