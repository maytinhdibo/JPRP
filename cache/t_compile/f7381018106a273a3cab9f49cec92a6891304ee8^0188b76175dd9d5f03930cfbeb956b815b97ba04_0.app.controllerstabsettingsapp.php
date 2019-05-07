<?php
/* Smarty version 3.1.33, created on 2019-05-07 04:36:24
  from 'app:controllerstabsettingsapp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd10b48192314_78345999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0188b76175dd9d5f03930cfbeb956b815b97ba04' => 
    array (
      0 => 'app:controllerstabsettingsapp',
      1 => 1551392274,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'core:controllers/tab/settings/appearance/form/setup.tpl' => 1,
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
    'app:controllers/tab/settings/wizardMode.tpl' => 1,
    'core:controllers/tab/settings/appearance/form/header.tpl' => 1,
    'core:controllers/tab/settings/appearance/form/footer.tpl' => 1,
    'core:controllers/tab/settings/appearance/form/theme.tpl' => 1,
    'core:controllers/tab/settings/appearance/form/stylesheet.tpl' => 1,
    'core:controllers/tab/settings/appearance/form/sidebar.tpl' => 1,
    'core:controllers/tab/settings/appearance/form/homepageImage.tpl' => 1,
    'core:controllers/tab/settings/appearance/form/favicon.tpl' => 1,
    'core:controllers/tab/settings/appearance/form/additionalHomepageContent.tpl' => 1,
    'core:controllers/tab/settings/appearance/form/lists.tpl' => 1,
    'app:linkAction/linkAction.tpl' => 1,
  ),
),false)) {
function content_5cd10b48192314_78345999 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings.md",'section'=>"website",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<?php $_smarty_tpl->_subTemplateRender("core:controllers/tab/settings/appearance/form/setup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form id="appearanceForm" class="pkp_form" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.settings.WebsiteSettingsTabHandler",'op'=>"saveFormData",'tab'=>"appearance"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"appearanceFormNotification"), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("app:controllers/tab/settings/wizardMode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wizardMode'=>$_smarty_tpl->tpl_vars['wizardMode']->value), 0, false);
?>

		<?php $_smarty_tpl->_subTemplateRender("core:controllers/tab/settings/appearance/form/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->_subTemplateRender("core:controllers/tab/settings/appearance/form/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->_subTemplateRender("core:controllers/tab/settings/appearance/form/theme.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("core:controllers/tab/settings/appearance/form/stylesheet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->_subTemplateRender("core:controllers/tab/settings/appearance/form/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->_subTemplateRender("core:controllers/tab/settings/appearance/form/homepageImage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->_subTemplateRender("core:controllers/tab/settings/appearance/form/favicon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->_subTemplateRender("core:controllers/tab/settings/appearance/form/additionalHomepageContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->_subTemplateRender("core:controllers/tab/settings/appearance/form/lists.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->_assignInScope('journal_thumbnail_field_id', $_smarty_tpl->tpl_vars['uploadImageLinkActions']->value['journalThumbnail']->getId());?>
	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"thumbnailArea",'class'=>((string)$_smarty_tpl->tpl_vars['wizard_class']->value)));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"thumbnailArea",'class'=>((string)$_smarty_tpl->tpl_vars['wizard_class']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>$_smarty_tpl->tpl_vars['journal_thumbnail_field_id']->value,'label'=>"manager.setup.journalThumbnail",'description'=>"manager.setup.journalThumbnail.description"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('for'=>$_smarty_tpl->tpl_vars['journal_thumbnail_field_id']->value,'label'=>"manager.setup.journalThumbnail",'description'=>"manager.setup.journalThumbnail.description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<div id="journalThumbnail">
				<?php echo $_smarty_tpl->tpl_vars['imagesViews']->value['journalThumbnail'];?>

			</div>
			<div id="<?php echo $_smarty_tpl->tpl_vars['uploadImageLinkActions']->value['journalThumbnail']->getId();?>
" class="pkp_linkActions">
				<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['uploadImageLinkActions']->value['journalThumbnail'],'contextId'=>"appearanceForm"), 0, false);
?>
			</div>
		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('for'=>$_smarty_tpl->tpl_vars['journal_thumbnail_field_id']->value,'label'=>"manager.setup.journalThumbnail",'description'=>"manager.setup.journalThumbnail.description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"thumbnailArea",'class'=>((string)$_smarty_tpl->tpl_vars['wizard_class']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php if (!$_smarty_tpl->tpl_vars['wizardMode']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"appearanceFormSubmit",'submitText'=>"common.save",'hideCancel'=>true),$_smarty_tpl ) );?>

	<?php }?>
</form>
<?php }
}
