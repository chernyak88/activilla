<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:15:26
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\product_variations\hooks\products\categories_section.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16012301815ffffd9e76fae6-00827491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c055c61d8756eeb187885a3a8fd5aed1a83e9b86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\categories_section.override.tpl',
      1 => 1610437056,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16012301815ffffd9e76fae6-00827491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffd9e7775b3_20603345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffd9e7775b3_20603345')) {function content_5ffffd9e7775b3_20603345($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("categories")) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:categories_section")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:categories_section"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <!-- Overridden by the Product Variations add-on -->
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:categories_section"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
