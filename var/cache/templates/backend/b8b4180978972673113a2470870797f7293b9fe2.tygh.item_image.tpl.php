<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:15:33
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\product_features\components\variants_picker\item_image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16329101145ffffda5f21a38-99096757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8b4180978972673113a2470870797f7293b9fe2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\product_features\\components\\variants_picker\\item_image.tpl',
      1 => 1610437085,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16329101145ffffda5f21a38-99096757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'enable_image' => 0,
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffda5f27897_22894324',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffda5f27897_22894324')) {function content_5ffffda5f27897_22894324($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['enable_image']->value) {?>
    
        ${data.image_url
        ? `<img src="${data.image_url}" width="30" height="30" alt="${data.name}" class="object-picker__product-feature-image"/>`
            : `<div class="no-image object-picker__product-feature-no-image" style="width: 30px; height: 30px;"><i class="glyph-image"></i></div>`
        }
    
<?php }?>
<div class="object-picker__product-feature-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name} <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div><?php }} ?>
