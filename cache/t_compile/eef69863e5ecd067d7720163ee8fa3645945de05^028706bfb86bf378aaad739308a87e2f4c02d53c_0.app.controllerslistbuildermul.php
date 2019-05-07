<?php
/* Smarty version 3.1.33, created on 2019-05-07 04:36:24
  from 'app:controllerslistbuildermul' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd10b486c8b96_59530714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '028706bfb86bf378aaad739308a87e2f4c02d53c' => 
    array (
      0 => 'app:controllerslistbuildermul',
      1 => 1551392383,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/listbuilder/listbuilderOptions.tpl' => 1,
    'app:controllers/grid/gridHeader.tpl' => 1,
    'app:controllers/grid/gridActionsAbove.tpl' => 1,
    'app:controllers/listbuilder/listbuilderTable.tpl' => 1,
  ),
),false)) {
function content_5cd10b486c8b96_59530714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('staticId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "component-",$_smarty_tpl->tpl_vars['grid']->value->getId() )));
$_smarty_tpl->_assignInScope('gridId', uniqid(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( $_smarty_tpl->tpl_vars['staticId']->value,'-' ))));
$_smarty_tpl->_assignInScope('gridActOnId', $_smarty_tpl->tpl_vars['gridId']->value);
if (count($_smarty_tpl->tpl_vars['lists']->value) == 2) {?>
	<?php $_smarty_tpl->_assignInScope('widthClass', "pkp_helpers_half");
} elseif (count($_smarty_tpl->tpl_vars['lists']->value) == 3) {?>
	<?php $_smarty_tpl->_assignInScope('widthClass', "pkp_helpers_third");
}
echo '<script'; ?>
>
	$(function() {
		$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridId']->value ));?>
').pkpHandler(
			'$.pkp.controllers.listbuilder.MultipleListsListbuilderHandler',
			{
				<?php $_smarty_tpl->_subTemplateRender("app:controllers/listbuilder/listbuilderOptions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				listsId: [
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lists']->value, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>
					'<?php echo $_smarty_tpl->tpl_vars['list']->value->getId();?>
',
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> ]
			}
		);
	});
<?php echo '</script'; ?>
>


<div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridId']->value ));?>
" class="pkp_controllers_grid pkp_controllers_listbuilder formWidget">

		<input disabled="disabled" type="hidden" class="deletions" />

	<div class="wrapper">
		<?php $_smarty_tpl->_subTemplateRender("app:controllers/grid/gridHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lists']->value, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>
			<?php $_smarty_tpl->_assignInScope('listId', $_smarty_tpl->tpl_vars['list']->value->getId());?>
			<div class="list_wrapper <?php echo $_smarty_tpl->tpl_vars['widthClass']->value;?>
 list_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listId']->value ));?>
">
				<?php if ($_smarty_tpl->tpl_vars['grid']->value->getActions(@constant('GRID_ACTION_POSITION_ABOVE'))) {?>
					<?php $_smarty_tpl->_subTemplateRender("app:controllers/grid/gridActionsAbove.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('actions'=>$_smarty_tpl->tpl_vars['grid']->value->getActions(@constant('GRID_ACTION_POSITION_ABOVE')),'gridId'=>$_smarty_tpl->tpl_vars['gridId']->value), 0, true);
?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['list']->value->getTitle()) {?>
					<div class="list_header">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( $_smarty_tpl->tpl_vars['list']->value->getTitle() ));?>

					</div>
				<?php }?>
				<?php $_smarty_tpl->_assignInScope('gridTableId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( $_smarty_tpl->tpl_vars['staticId']->value,"-table-",$_smarty_tpl->tpl_vars['listId']->value )));?>
				<?php $_smarty_tpl->_subTemplateRender("app:controllers/listbuilder/listbuilderTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gridTableId'=>$_smarty_tpl->tpl_vars['gridTableId']->value,'rows'=>$_smarty_tpl->tpl_vars['listsRows']->value[$_smarty_tpl->tpl_vars['listId']->value]), 0, true);
?>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<?php }
}
