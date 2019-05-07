<?php
/* Smarty version 3.1.33, created on 2019-05-07 04:36:24
  from 'core:controllerstabsettingsapp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd10b4828a938_26165346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a441841f91137f0fcf1b4d9a171d46ae3b22b031' => 
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
function content_5cd10b4828a938_26165346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('uploadImageFieldId', $_smarty_tpl->tpl_vars['uploadImageLinkActions']->value['favicon']->getId());
$_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>((string)$_smarty_tpl->tpl_vars['uploadImageFieldId']->value),'label'=>"manager.setup.favicon",'description'=>"manager.setup.faviconDescription"));
$_block_repeat=true;
echo $_block_plugin14->smartyFBVFormSection(array('for'=>((string)$_smarty_tpl->tpl_vars['uploadImageFieldId']->value),'label'=>"manager.setup.favicon",'description'=>"manager.setup.faviconDescription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<div id="favicon">
		<?php echo $_smarty_tpl->tpl_vars['imagesViews']->value['favicon'];?>

	</div>
	<div id="<?php echo $_smarty_tpl->tpl_vars['uploadImageFieldId']->value;?>
" class="pkp_linkActions">
		<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['uploadImageLinkActions']->value['favicon'],'contextId'=>"appearanceForm"), 0, false);
?>
	</div>
<?php $_block_repeat=false;
echo $_block_plugin14->smartyFBVFormSection(array('for'=>((string)$_smarty_tpl->tpl_vars['uploadImageFieldId']->value),'label'=>"manager.setup.favicon",'description'=>"manager.setup.faviconDescription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
