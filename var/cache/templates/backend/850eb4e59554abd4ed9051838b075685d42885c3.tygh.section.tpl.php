<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:15:46
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\common\section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7974111175ffffdb230e5b5-68483884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '850eb4e59554abd4ed9051838b075685d42885c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\common\\section.tpl',
      1 => 1610437072,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7974111175ffffdb230e5b5-68483884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rnd' => 0,
    'section_content' => 0,
    'section_state' => 0,
    'config' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffdb231c577_32223359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffdb231c577_32223359')) {function content_5ffffdb231c577_32223359($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('close'));
?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<div class="clear" id="ds_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="section-border">
        <?php echo $_smarty_tpl->tpl_vars['section_content']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['section_state']->value) {?>
            <p align="right">
                <a href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"close_section=".((string)$_smarty_tpl->tpl_vars['key']->value))), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php echo $_smarty_tpl->__("close");?>
</a>
            </p>
        <?php }?>
    </div>
</div><?php }} ?>
