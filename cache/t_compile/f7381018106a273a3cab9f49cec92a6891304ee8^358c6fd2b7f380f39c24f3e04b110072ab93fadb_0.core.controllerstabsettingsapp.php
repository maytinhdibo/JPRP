<?php
/* Smarty version 3.1.33, created on 2019-05-07 04:36:24
  from 'core:controllerstabsettingsapp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd10b4827e535_61429420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '358c6fd2b7f380f39c24f3e04b110072ab93fadb' => 
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
function content_5cd10b4827e535_61429420 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('uploadImageFieldId', $_smarty_tpl->tpl_vars['uploadImageLinkActions']->value['homepageImage']->getId());
$_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>((string)$_smarty_tpl->tpl_vars['uploadImageFieldId']->value),'label'=>"manager.setup.homepageImage",'description'=>"manager.setup.homepageImageDescription"));
$_block_repeat=true;
echo $_block_plugin13->smartyFBVFormSection(array('for'=>((string)$_smarty_tpl->tpl_vars['uploadImageFieldId']->value),'label'=>"manager.setup.homepageImage",'description'=>"manager.setup.homepageImageDescription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<div id="homepageImage">
		<?php echo $_smarty_tpl->tpl_vars['imagesViews']->value['homepageImage'];?>

	</div>
	<div id="<?php echo $_smarty_tpl->tpl_vars['uploadImageFieldId']->value;?>
" class="pkp_linkActions">
		<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['uploadImageLinkActions']->value['homepageImage'],'contextId'=>"appearanceForm"), 0, false);
?>
	</div>
<?php $_block_repeat=false;
echo $_block_plugin13->smartyFBVFormSection(array('for'=>((string)$_smarty_tpl->tpl_vars['uploadImageFieldId']->value),'label'=>"manager.setup.homepageImage",'description'=>"manager.setup.homepageImageDescription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
