<?php
/* Smarty version 3.1.33, created on 2019-05-07 04:36:31
  from 'app:controllerstabsettingsarc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd10b4fba35e9_03023102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7934eb4836e53c41d9ca24ba4433ce9d5ca2855c' => 
    array (
      0 => 'app:controllerstabsettingsarc',
      1 => 1551392383,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
    'app:linkAction/linkAction.tpl' => 1,
  ),
),false)) {
function content_5cd10b4fba35e9_03023102 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings.md",'section'=>"website",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#archivingForm').pkpHandler('$.pkp.controllers.tab.settings.archiving.form.ArchivingSettingsFormHandler',
			{
				baseUrl: <?php echo json_encode($_smarty_tpl->tpl_vars['baseUrl']->value);?>

			}
		);
	});
<?php echo '</script'; ?>
>

<form id="archivingForm" class="pkp_form" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.settings.WebsiteSettingsTabHandler",'op'=>"saveFormData",'tab'=>"archiving"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"archivingFormNotification"), 0, false);
?>

	<input type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isPLNPluginInstalled']->value ));?>
" id="isPLNPluginInstalled" name="isPLNPluginInstalled" />
	<input type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isPLNPluginEnabled']->value ));?>
" id="isPLNPluginEnabled" name="isPLNPluginEnabled" />

	<?php if ($_smarty_tpl->tpl_vars['isPLNPluginInstalled']->value) {?>
		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"mainLockss"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"mainLockss"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('title'=>"manager.setup.plnPluginArchiving",'id'=>"plnArea"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormArea(array('title'=>"manager.setup.plnPluginArchiving",'id'=>"plnArea"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.plnDescription"),$_smarty_tpl ) );?>
             

				<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>"true",'translate'=>false));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('list'=>"true",'translate'=>false), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "enablePLNArchivingLabel", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.plnPluginEnable"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"enablePln",'value'=>"1",'checked'=>$_smarty_tpl->tpl_vars['isPLNPluginEnabled']->value,'label'=>$_smarty_tpl->tpl_vars['enablePLNArchivingLabel']->value,'translate'=>false),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('list'=>"true",'translate'=>false), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormArea(array('title'=>"manager.setup.plnPluginArchiving",'id'=>"plnArea"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php if ($_smarty_tpl->tpl_vars['isPLNPluginEnabled']->value) {?>
				<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('translate'=>false));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('translate'=>false), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.plnSettingsDescription"),$_smarty_tpl ) );?>


					<div id="pln-settings-action" class="pkp_linkActions">
						<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['plnSettingsShowAction']->value,'contextId'=>"archivingForm"), 0, false);
?>
					</div>
				<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('translate'=>false), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('translate'=>false));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormSection(array('translate'=>false), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'depositsGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('component'=>"plugins.generic.pln.controllers.grid.PLNStatusGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"depositsGridContainer",'url'=>$_smarty_tpl->tpl_vars['depositsGridUrl']->value),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormSection(array('translate'=>false), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php }?>
		<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"mainLockss"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<p class="expand-others">
			<a id="toggleOthers" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.otherLockss"),$_smarty_tpl ) );?>
</a>
		</p>
	<?php } else { ?>
		<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('title'=>"manager.setup.plnPluginArchiving",'id'=>"plnPluginArchivingArea"));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormArea(array('title'=>"manager.setup.plnPluginArchiving",'id'=>"plnPluginArchivingArea"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.plnPluginNotInstalled"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormArea(array('title'=>"manager.setup.plnPluginArchiving",'id'=>"plnPluginArchivingArea"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>
	
	<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"otherLockss"));
$_block_repeat=true;
echo $_block_plugin7->smartyFBVFormArea(array('id'=>"otherLockss"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('title'=>"manager.setup.lockssTitle",'id'=>"lockss_description"));
$_block_repeat=true;
echo $_block_plugin8->smartyFBVFormArea(array('title'=>"manager.setup.lockssTitle",'id'=>"lockss_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.lockssDescription"),$_smarty_tpl ) );?>

			
			<?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>"true",'translate'=>false));
$_block_repeat=true;
echo $_block_plugin9->smartyFBVFormSection(array('list'=>"true",'translate'=>false), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "lockssUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"gateway",'op'=>"lockss"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "enableLockssLabel", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.lockssEnable",'lockssUrl'=>$_smarty_tpl->tpl_vars['lockssUrl']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"enableLockss",'value'=>"1",'checked'=>$_smarty_tpl->tpl_vars['enableLockss']->value,'label'=>$_smarty_tpl->tpl_vars['enableLockssLabel']->value,'translate'=>false),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin9->smartyFBVFormSection(array('list'=>"true",'translate'=>false), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_repeat=false;
echo $_block_plugin8->smartyFBVFormArea(array('title'=>"manager.setup.lockssTitle",'id'=>"lockss_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('title'=>"manager.setup.clockssTitle",'id'=>"clockss_description"));
$_block_repeat=true;
echo $_block_plugin10->smartyFBVFormArea(array('title'=>"manager.setup.clockssTitle",'id'=>"clockss_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.clockssDescription"),$_smarty_tpl ) );?>

			
			<?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>"true",'translate'=>false));
$_block_repeat=true;
echo $_block_plugin11->smartyFBVFormSection(array('list'=>"true",'translate'=>false), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "clockssUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"gateway",'op'=>"clockss"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "enableClockssLabel", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.clockssEnable",'clockssUrl'=>$_smarty_tpl->tpl_vars['clockssUrl']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"enableClockss",'value'=>"1",'checked'=>$_smarty_tpl->tpl_vars['enableClockss']->value,'label'=>$_smarty_tpl->tpl_vars['enableClockssLabel']->value,'translate'=>false),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin11->smartyFBVFormSection(array('list'=>"true",'translate'=>false), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_repeat=false;
echo $_block_plugin10->smartyFBVFormArea(array('title'=>"manager.setup.clockssTitle",'id'=>"clockss_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php if ($_smarty_tpl->tpl_vars['isPorticoPluginInstalled']->value) {?>
			<?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('title'=>"manager.setup.porticoTitle",'id'=>"portico_description"));
$_block_repeat=true;
echo $_block_plugin12->smartyFBVFormArea(array('title'=>"manager.setup.porticoTitle",'id'=>"portico_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.porticoDescription"),$_smarty_tpl ) );?>


				<?php $_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>"true",'translate'=>false));
$_block_repeat=true;
echo $_block_plugin13->smartyFBVFormSection(array('list'=>"true",'translate'=>false), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "enablePorticoLabel", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.porticoEnable"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"enablePortico",'value'=>"1",'checked'=>$_smarty_tpl->tpl_vars['enablePortico']->value,'label'=>$_smarty_tpl->tpl_vars['enablePorticoLabel']->value,'translate'=>false),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin13->smartyFBVFormSection(array('list'=>"true",'translate'=>false), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_repeat=false;
echo $_block_plugin12->smartyFBVFormArea(array('title'=>"manager.setup.porticoTitle",'id'=>"portico_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>
	<?php $_block_repeat=false;
echo $_block_plugin7->smartyFBVFormArea(array('id'=>"otherLockss"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"archivingFormSubmit",'submitText'=>"common.save",'hideCancel'=>true),$_smarty_tpl ) );?>

</form>
<?php }
}
