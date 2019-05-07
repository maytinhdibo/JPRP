<?php
/* Smarty version 3.1.33, created on 2019-05-07 03:48:00
  from 'app:dashboardindex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd0fff0293ed7_06990978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9f648fa76ca397b9d4cc4c6c88f9417b91e0ea8' => 
    array (
      0 => 'app:dashboardindex.tpl',
      1 => 1551392383,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_5cd0fff0293ed7_06990978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"navigation.submissions"), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#dashboardTabs').pkpHandler('$.pkp.controllers.TabHandler');
	});
<?php echo '</script'; ?>
>
<div id="dashboardTabs" class="pkp_controllers_tab">
	<ul>
		<li><a name="myQueue" href="#myQueue"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"dashboard.myQueue"),$_smarty_tpl ) );?>
</a></li>
		<?php if (array_intersect(array(ROLE_ID_SITE_ADMIN,ROLE_ID_MANAGER),(array)$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
			<li><a name="unassigned" href="#unassigned"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.queue.long.submissionsUnassigned"),$_smarty_tpl ) );?>
</a></li>
			<li><a name="active" href="#active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.queue.long.active"),$_smarty_tpl ) );?>
</a></li>
		<?php }?>
		<li><a name="archives" href="#archived"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.archives"),$_smarty_tpl ) );?>
</a></li>
	</ul>
	<div id="myQueue">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"submissions.md",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

		<div class="pkp_content_panel">
			<?php $_smarty_tpl->_assignInScope('uuid', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid('') )));?>
			<div id="my-submission-list-handler-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
">
				<?php echo '<script'; ?>
 type="text/javascript">
					pkp.registry.init('my-submission-list-handler-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
', 'SubmissionsListPanel', <?php echo $_smarty_tpl->tpl_vars['myQueueListData']->value;?>
);
				<?php echo '</script'; ?>
>
			</div>
		</div>
	</div>
	<?php if (array_intersect(array(ROLE_ID_SITE_ADMIN,ROLE_ID_MANAGER),(array)$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
		<div id="unassigned">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"submissions.md",'section'=>"unassigned",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<div class="pkp_content_panel">
				<?php $_smarty_tpl->_assignInScope('uuid', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid('') )));?>
				<div id="unassigned-list-handler-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
">
					<?php echo '<script'; ?>
 type="text/javascript">
						pkp.registry.init('unassigned-list-handler-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
', 'SubmissionsListPanel', <?php echo $_smarty_tpl->tpl_vars['unassignedListData']->value;?>
);
					<?php echo '</script'; ?>
>
				</div>
			</div>
		</div>
		<div id="active">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"submissions.md",'section'=>"active",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<div class="pkp_content_panel">
				<?php $_smarty_tpl->_assignInScope('uuid', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid('') )));?>
				<div id="active-list-handler-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
">
					<?php echo '<script'; ?>
 type="text/javascript">
						pkp.registry.init('active-list-handler-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
', 'SubmissionsListPanel', <?php echo $_smarty_tpl->tpl_vars['activeListData']->value;?>
);
					<?php echo '</script'; ?>
>
				</div>
			</div>
		</div>
	<?php }?>
	<div id="archived">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"submissions.md",'section'=>"archives",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

		<div class="pkp_content_panel">
			<?php $_smarty_tpl->_assignInScope('uuid', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid('') )));?>
			<div id="archived-list-handler-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
">
				<?php echo '<script'; ?>
 type="text/javascript">
					pkp.registry.init('archived-list-handler-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
', 'SubmissionsListPanel', <?php echo $_smarty_tpl->tpl_vars['archivedListData']->value;?>
);
				<?php echo '</script'; ?>
>
			</div>
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
