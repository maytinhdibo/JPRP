<?php
/* Smarty version 3.1.33, created on 2019-05-07 04:36:33
  from 'app:controllerstabsettingsann' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd10b51748b41_50859016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25d12f6b6705fde6527ed6d97175cc0d56774de2' => 
    array (
      0 => 'app:controllerstabsettingsann',
      1 => 1551392383,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_5cd10b51748b41_50859016 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings.md",'section'=>"website",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#announcementSettingsForm').pkpHandler('$.pkp.controllers.tab.settings.announcements.form.AnnouncementSettingsFormHandler',
			{
				publishChangeEvents: ['updateHeader']
			}
		);
	});
<?php echo '</script'; ?>
>

<form id="announcementSettingsForm" class="pkp_form" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.settings.WebsiteSettingsTabHandler",'op'=>"saveFormData",'tab'=>"announcements"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"announcementSettingsFormNotification"), 0, false);
?>

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"announcements",'title'=>"manager.setup.announcements"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"announcements",'title'=>"manager.setup.announcements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>true,'description'=>"manager.setup.announcementsDescription"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('list'=>true,'description'=>"manager.setup.announcementsDescription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"enableAnnouncements",'label'=>"manager.setup.enableAnnouncements",'value'=>"1",'checked'=>$_smarty_tpl->tpl_vars['enableAnnouncements']->value),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"enableAnnouncementsHomepage",'label'=>"manager.setup.enableAnnouncementsHomepage1",'value'=>"1",'checked'=>$_smarty_tpl->tpl_vars['enableAnnouncementsHomepage']->value,'inline'=>true),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"numAnnouncementsHomepage",'from'=>$_smarty_tpl->tpl_vars['numAnnouncementsHomepageOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['numAnnouncementsHomepage']->value,'defaultValue'=>"1",'translate'=>false,'disabled'=>$_smarty_tpl->tpl_vars['disableAnnouncementsHomepage']->value,'inline'=>true),$_smarty_tpl ) );?>

			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.enableAnnouncementsHomepage2"),$_smarty_tpl ) );?>
</span>
		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('list'=>true,'description'=>"manager.setup.announcementsDescription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('description'=>"manager.setup.announcementsIntroductionDescription"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('description'=>"manager.setup.announcementsIntroductionDescription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'multilingual'=>"true",'id'=>"announcementsIntroduction",'value'=>$_smarty_tpl->tpl_vars['announcementsIntroduction']->value,'rich'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('description'=>"manager.setup.announcementsIntroductionDescription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"announcements",'title'=>"manager.setup.announcements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'announcementTypeGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.announcements.AnnouncementTypeGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"announcementTypeGridContainer",'url'=>$_smarty_tpl->tpl_vars['announcementTypeGridUrl']->value),$_smarty_tpl ) );?>


	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'announcementGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.announcements.ManageAnnouncementGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"announcementGridContainer",'url'=>$_smarty_tpl->tpl_vars['announcementGridUrl']->value),$_smarty_tpl ) );?>


	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"announcementSettingsFormSubmit",'submitText'=>"common.save",'hideCancel'=>true),$_smarty_tpl ) );?>

</form>
<?php }
}
