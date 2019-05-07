<?php
/* Smarty version 3.1.33, created on 2019-05-07 04:36:24
  from 'core:controllerstabsettingsapp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd10b48268c01_51414266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '775536613f4eb106a31f56f86307e4cec22d4b1a' => 
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
function content_5cd10b48268c01_51414266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('stylesheetFieldId', $_smarty_tpl->tpl_vars['uploadCssLinkAction']->value->getId());
$_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.setup.useStyleSheet",'for'=>$_smarty_tpl->tpl_vars['stylesheetFieldId']->value,'description'=>"manager.setup.styleSheetDescription"));
$_block_repeat=true;
echo $_block_plugin12->smartyFBVFormSection(array('label'=>"manager.setup.useStyleSheet",'for'=>$_smarty_tpl->tpl_vars['stylesheetFieldId']->value,'description'=>"manager.setup.styleSheetDescription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<div id="styleSheet">
		<?php echo $_smarty_tpl->tpl_vars['styleSheetView']->value;?>

	</div>
	<div id="<?php echo $_smarty_tpl->tpl_vars['stylesheetFieldId']->value;?>
" class="pkp_linkActions">
		<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['uploadCssLinkAction']->value,'contextId'=>"appearanceForm"), 0, false);
?>
	</div>
<?php $_block_repeat=false;
echo $_block_plugin12->smartyFBVFormSection(array('label'=>"manager.setup.useStyleSheet",'for'=>$_smarty_tpl->tpl_vars['stylesheetFieldId']->value,'description'=>"manager.setup.styleSheetDescription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
