<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:16:41
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\seo\hooks\product_features\feature_code.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15914750725ffffde958fa38-31889856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f584bd113086aba7e45719c64690d089ccc7cb86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\seo\\hooks\\product_features\\feature_code.post.tpl',
      1 => 1610437065,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15914750725ffffde958fa38-31889856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'feature_codes' => 0,
    'feature_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffde9598e44_51077566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffde9598e44_51077566')) {function content_5ffffde9598e44_51077566($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('seo.product_feature.feature_code.notice'));
?>
<div id="elm_feature_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_description" class="muted description">
    <p><?php echo $_smarty_tpl->__("seo.product_feature.feature_code.notice");?>
</p>
    <?php if ($_smarty_tpl->tpl_vars['feature_codes']->value) {?>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['feature_code'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature_code']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature_codes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature_code']->key => $_smarty_tpl->tpl_vars['feature_code']->value) {
$_smarty_tpl->tpl_vars['feature_code']->_loop = true;
?>
                <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_code']->value['name'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_code']->value['description'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php } ?>
        </ul>
    <?php }?>
</div><?php }} ?>
