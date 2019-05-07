<?php
/* Smarty version 3.1.33, created on 2019-05-07 04:37:27
  from 'app:controllerstabsettingsplu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd10b875bfcd4_51474245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bf7a2f31ef637e9a41ba5f630667a5452214eb9' => 
    array (
      0 => 'app:controllerstabsettingsplu',
      1 => 1551392383,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd10b875bfcd4_51474245 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings.md",'section'=>"website",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<?php echo '<script'; ?>
 type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#pluginsTabs').pkpHandler('$.pkp.controllers.TabHandler');
	});
<?php echo '</script'; ?>
>

<div id="pluginsTabs" class="pkp_controllers_tab">
	<ul>
		<li><a href="#installedPluginsDiv"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.plugins.installed"),$_smarty_tpl ) );?>
</a></li>
		<li><a href="#pluginGalleryDiv"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.plugins.pluginGallery"),$_smarty_tpl ) );?>
</a></li>
	</ul>
	<div id="installedPluginsDiv">
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'pluginGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.plugins.SettingsPluginGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"pluginGridContainer",'url'=>$_smarty_tpl->tpl_vars['pluginGridUrl']->value),$_smarty_tpl ) );?>

	</div>
	<div id="pluginGalleryDiv">
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'pluginGalleryGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.plugins.PluginGalleryGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"pluginGalleryGridContainer",'url'=>$_smarty_tpl->tpl_vars['pluginGalleryGridUrl']->value),$_smarty_tpl ) );?>

	</div>
</div>
<?php }
}
