<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:15:36
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\yml_export\common\yml_categories_selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1580769325ffffda81416b4-33865288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '330203e5e64ed48e82d4b0c66ae637d321dd5391' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\yml_export\\common\\yml_categories_selector.tpl',
      1 => 1610437070,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1580769325ffffda81416b4-33865288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj_id' => 0,
    'name' => 0,
    'value' => 0,
    'yml2_market_category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffda81510c5_26455207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffda81510c5_26455207')) {function content_5ffffda81510c5_26455207($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('yml2_export_market_category','tt_yml2_export_market_category'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/yml_export/yml_categories.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['obj_id']->value)===null||$tmp==='' ? "yml_categories" : $tmp), null, 0);?>

<div class="control-group">
    <label for="product_type_prefix" class="control-label"><?php echo $_smarty_tpl->__("yml2_export_market_category");?>
:</label>
    <div class="controls" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_box">
        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" size="200" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-large cm-yml-categories" <?php if ((!empty($_smarty_tpl->tpl_vars['yml2_market_category']->value))) {?>placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yml2_market_category']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>/></br>
        <p class="muted description"><?php echo $_smarty_tpl->__("tt_yml2_export_market_category");?>
</p>
    </div>
</div>

<?php }} ?>
