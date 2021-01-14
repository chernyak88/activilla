<?php /* Smarty version Smarty-3.1.21, created on 2021-01-14 11:16:39
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\product_features\components\bulk_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7365103605ffffde760e424-48277324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d8b1a28737aaa534a6e8f4d41fd0ae424c2cb40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\product_features\\components\\bulk_edit.tpl',
      1 => 1610437085,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7365103605ffffde760e424-48277324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_feature_statuses' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ffffde76252a5_72553535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffffde76252a5_72553535')) {function content_5ffffde76252a5_72553535($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('selected','status','group','category','display','actions'));
?>
<div class="bulk-edit bulk-edit--product-features clearfix hidden"
     data-ca-bulkedit-expanded-object="true"
     data-ca-bulkedit-component="expandedObject"
>

    <ul class="btn-group bulk-edit__wrapper">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_features:bulk_edit_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_features:bulk_edit_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="btn bulk-edit__btn bulk-edit__btn--check-items">
            <input class="bulk-edit__btn-content--checkbox hidden bulkedit-disabler" 
                   type="checkbox" 
                   checked 
                   data-ca-bulkedit-toggler="true"
                   data-ca-bulkedit-enable="[data-ca-bulkedit-default-object=true]" 
                   data-ca-bulkedit-disable="[data-ca-bulkedit-expanded-object=true]"
            />
            <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown">
                <span data-ca-longtap-selected-counter="true">0</span> 
                <span class="mobile-hide"><?php echo $_smarty_tpl->__("selected");?>
</span> 
                <span class="caret mobile-hide"></span>
            </span>
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dropdown_menu_class'=>"cm-check-items",'wrap_select_actions_into_dropdown'=>true,'check_statuses'=>$_smarty_tpl->tpl_vars['product_feature_statuses']->value), 0);?>

        </li>

        <li class="btn bulk-edit__btn bulk-edit__btn--status dropleft-mod">
            <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown">
                <?php echo $_smarty_tpl->__("status");?>
 
                <span class="caret mobile-hide"></span>
            </span>

            <ul class="dropdown-menu">
                <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/bulk_edit/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </ul>
        </li>

        <li class="btn bulk-edit__btn bulk-edit__btn--group dropleft-mod">
            <span class="bulk-edit__btn-content bulk-edit-toggle bulk-edit__btn-content--group" data-toggle=".bulk-edit__content--group">
                <?php echo $_smarty_tpl->__("group");?>
 
                <span class="caret mobile-hide"></span>
            </span>

            <div class="bulk-edit--reset-dropdown-menu bulk-edit__content bulk-edit__content--group">
                <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/bulk_edit/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>

             <div class="bulk-edit--overlay"></div>
        </li>

        <li class="btn bulk-edit__btn bulk-edit__btn--category dropleft-mod">
            <span class="bulk-edit__btn-content bulk-edit-toggle bulk-edit__btn-content--category" data-toggle=".bulk-edit__content--categories">
                <?php echo $_smarty_tpl->__("category");?>
 
                <span class="caret mobile-hide"></span>
            </span>

            <div class="bulk-edit--reset-dropdown-menu bulk-edit__content bulk-edit__content--categories">
                <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/bulk_edit/categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>

            <div class="bulk-edit--overlay"></div>
        </li>

        <li class="btn bulk-edit__btn bulk-edit__btn--display dropleft-mod">
            <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown">
                <?php echo $_smarty_tpl->__("display");?>
 
                <span class="caret mobile-hide"></span>
            </span>

            <ul class="dropdown-menu">
                <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/bulk_edit/display.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </ul>
        </li>

        <li class="btn bulk-edit__btn bulk-edit__btn--actions dropleft-mod">
            <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown">
                <?php echo $_smarty_tpl->__("actions");?>
 
                <span class="caret mobile-hide"></span>
            </span>

            <ul class="dropdown-menu">
                <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/bulk_edit/actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </ul>
        </li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_features:bulk_edit_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>

</div>
<?php }} ?>
