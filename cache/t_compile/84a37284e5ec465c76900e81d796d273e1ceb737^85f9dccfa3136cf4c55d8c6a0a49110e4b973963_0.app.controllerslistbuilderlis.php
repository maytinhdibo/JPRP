<?php
/* Smarty version 3.1.33, created on 2019-05-07 04:36:24
  from 'app:controllerslistbuilderlis' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd10b486538a3_82339543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85f9dccfa3136cf4c55d8c6a0a49110e4b973963' => 
    array (
      0 => 'app:controllerslistbuilderlis',
      1 => 1551392383,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkAction.tpl' => 1,
  ),
),false)) {
function content_5cd10b486538a3_82339543 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['row']->value->getId()) {?>
	<?php $_smarty_tpl->_assignInScope('rowId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "component-",$_smarty_tpl->tpl_vars['row']->value->getGridId(),"-row-",$_smarty_tpl->tpl_vars['row']->value->getId() )));
} else { ?>
	<?php $_smarty_tpl->_assignInScope('rowId', uniqid(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "component-",$_smarty_tpl->tpl_vars['row']->value->getGridId(),"-row-tempId-" ))));
}?>
<tr <?php if ($_smarty_tpl->tpl_vars['rowId']->value) {?>id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rowId']->value ));?>
" <?php }?>class="<?php if ($_smarty_tpl->tpl_vars['rowId']->value) {?>element<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->getId() ));?>
 <?php }?>gridRow">
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "listbuilderRowActions", null);?>
		<div class="row_actions">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value->getActions(@constant('GRID_ACTION_POSITION_ROW_LEFT')), 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
				<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['action']->value,'contextId'=>$_smarty_tpl->tpl_vars['rowId']->value), 0, true);
?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cells']->value, 'cell', false, NULL, 'listbuilderCells', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cell']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_listbuilderCells']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_listbuilderCells']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_listbuilderCells']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_listbuilderCells']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_listbuilderCells']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_listbuilderCells']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_listbuilderCells']->value['total'];
?>
		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_listbuilderCells']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_listbuilderCells']->value['first'] : null)) {?>
			<td class="first_column">
				<?php if ($_smarty_tpl->tpl_vars['row']->value->getId()) {?>
					<input type="hidden" name="rowId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->getId() ));?>
" />
				<?php }?>
				<?php if (!$_smarty_tpl->tpl_vars['row']->value->getId() || $_smarty_tpl->tpl_vars['row']->value->getIsModified()) {?>
					<input type="hidden" disabled="disabled" class="isModified" value="1" />
				<?php } else { ?>
					<input type="hidden" disabled="disabled" class="isModified" value="0" />
				<?php }?>
				<div class="row_container">
					<div class="gridCell row_file"><?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
</div>
				</div>
				<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_listbuilderCells']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_listbuilderCells']->value['last'] : null)) {?>
					<?php echo $_smarty_tpl->tpl_vars['listbuilderRowActions']->value;?>

				<?php }?>
			</td>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['column']->value->hasFlag('alignment')) {?>
				<?php $_smarty_tpl->_assignInScope('alignment', $_smarty_tpl->tpl_vars['column']->value->getFlag('alignment'));?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('alignment', @constant('COLUMN_ALIGNMENT_CENTER'));?>
			<?php }?>
			<td style="text-align: <?php echo $_smarty_tpl->tpl_vars['alignment']->value;?>
" class="gridCell">
				<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>

				<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_listbuilderCells']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_listbuilderCells']->value['last'] : null) && $_smarty_tpl->tpl_vars['row']->value->getActions(@constant('GRID_ACTION_POSITION_ROW_LEFT'))) {?>
					<?php echo $_smarty_tpl->tpl_vars['listbuilderRowActions']->value;?>

				<?php }?>
			</td>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tr>
<?php }
}
