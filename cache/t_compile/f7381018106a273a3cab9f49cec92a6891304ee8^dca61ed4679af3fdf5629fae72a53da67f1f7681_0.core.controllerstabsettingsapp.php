<?php
/* Smarty version 3.1.33, created on 2019-05-07 04:36:24
  from 'core:controllerstabsettingsapp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd10b481c3cb1_35948997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dca61ed4679af3fdf5629fae72a53da67f1f7681' => 
    array (
      0 => 'core:controllerstabsettingsapp',
      1 => 1551392383,
      2 => 'core',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkAction.tpl' => 1,
  ),
),false)) {
function content_5cd10b481c3cb1_35948997 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.setup.logo",'class'=>$_smarty_tpl->tpl_vars['wizardClass']->value));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('label'=>"manager.setup.logo",'class'=>$_smarty_tpl->tpl_vars['wizardClass']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<div id="pageHeaderLogoImage">
		<?php echo $_smarty_tpl->tpl_vars['imagesViews']->value['pageHeaderLogoImage'];?>

	</div>
	<div id="<?php echo $_smarty_tpl->tpl_vars['uploadImageLinkActions']->value['pageHeaderLogoImage']->getId();?>
" class="pkp_linkActions">
		<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['uploadImageLinkActions']->value['pageHeaderLogoImage'],'contextId'=>"appearanceForm"), 0, false);
?>
	</div>
<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('label'=>"manager.setup.logo",'class'=>$_smarty_tpl->tpl_vars['wizardClass']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
