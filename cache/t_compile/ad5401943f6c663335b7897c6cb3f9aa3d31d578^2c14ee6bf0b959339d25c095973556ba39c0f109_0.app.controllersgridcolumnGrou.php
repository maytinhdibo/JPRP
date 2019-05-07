<?php
/* Smarty version 3.1.33, created on 2019-05-07 03:47:58
  from 'app:controllersgridcolumnGrou' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd0ffee984dd5_63939637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c14ee6bf0b959339d25c095973556ba39c0f109' => 
    array (
      0 => 'app:controllersgridcolumnGrou',
      1 => 1551392383,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd0ffee984dd5_63939637 (Smarty_Internal_Template $_smarty_tpl) {
?>
<colgroup>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columns']->value, 'column');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['column']->value->hasFlag('indent')) {?>
			<?php continue 1;?>
		<?php }?>
		<col class="grid-column column-<?php echo $_smarty_tpl->tpl_vars['column']->value->getId();?>
"
		<?php if ($_smarty_tpl->tpl_vars['column']->value->hasFlag('width')) {?>
			style="width: <?php echo $_smarty_tpl->tpl_vars['column']->value->getFlag('width');?>
%;"
		<?php }?> />
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</colgroup>
<?php }
}
