<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:16:39
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\product_features\components\bulk_edit\group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9377266015ffffde78d0e86-94447999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '582af62d0a6907ba3565e8935b096a988c766ed7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\product_features\\components\\bulk_edit\\group.tpl',
      1 => 1610437085,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9377266015ffffde78d0e86-94447999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'group_features' => 0,
    'group_feature' => 0,
    'feature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffde78e4f14_62221329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffde78e4f14_62221329')) {function content_5ffffde78e4f14_62221329($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('group','none','reset','apply'));
?>
<div class="bulk-edit-inner bulk-edit-inner--group">
    <div class="bulk-edit-inner__header">
         <span><?php echo $_smarty_tpl->__("group");?>
</span>
    </div>
    <div class="bulk-edit-inner__body">
        <select name="feature_data[parent_id]"
                id="elm_feature_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-feature-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-bulkedit-group-changer
                class="cm-feature-group"
        >
            <option value="0">-<?php echo $_smarty_tpl->__("none");?>
-</option>
            <?php  $_smarty_tpl->tpl_vars['group_feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_feature']->key => $_smarty_tpl->tpl_vars['group_feature']->value) {
$_smarty_tpl->tpl_vars['group_feature']->_loop = true;
?>
                <option data-ca-display-on-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['display_on_product'], ENT_QUOTES, 'UTF-8');?>
" data-ca-display-on-catalog="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['display_on_catalog'], ENT_QUOTES, 'UTF-8');?>
" data-ca-display-on-header="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['display_on_header'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_feature']->value['feature_id']==$_smarty_tpl->tpl_vars['feature']->value['parent_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </div>
     <div class="bulk-edit-inner__footer">
        <button class="btn bulk-edit-inner__btn bulkedit-group-cancel"
                role="button"
                data-ca-bulkedit-group-cancel
                data-ca-bulkedit-group-reset-changer="[data-ca-bulkedit-group-changer]"
        ><?php echo $_smarty_tpl->__("reset");?>
</button>
        <button class="btn btn-primary bulk-edit-inner__btn bulkedit-group-update"
                role="button"
                data-ca-bulkedit-group-update
                data-ca-bulkedit-group-values="[data-ca-bulkedit-group-changer]"
                data-ca-bulkedit-group-target-form="[name=manage_product_features_form]"
                data-ca-bulkedit-group-target-form-active-objects="tr.selected:has(input[type=checkbox].cm-item:checked)"
                data-ca-bulkedit-group-dispatch="product_features.m_set_group"
        ><?php echo $_smarty_tpl->__("apply");?>
</button>
    </div>
</div>
<?php }} ?>
