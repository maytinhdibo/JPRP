<?php
/* Smarty version 3.1.33, created on 2019-05-07 04:36:24
  from 'core:controllerstabsettingsapp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd10b4829a852_74274327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '985dc1c2f3100015ef34f14bce35d07483f0bdd8' => 
    array (
      0 => 'core:controllerstabsettingsapp',
      1 => 1551392383,
      2 => 'core',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd10b4829a852_74274327 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"advancedAppearanceSettings",'title'=>"manager.setup.lists"));
$_block_repeat=true;
echo $_block_plugin16->smartyFBVFormArea(array('id'=>"advancedAppearanceSettings",'title'=>"manager.setup.lists"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php $_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('description'=>"manager.setup.listsDescription"));
$_block_repeat=true;
echo $_block_plugin17->smartyFBVFormSection(array('description'=>"manager.setup.listsDescription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"itemsPerPage",'value'=>$_smarty_tpl->tpl_vars['itemsPerPage']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'label'=>"common.itemsPerPage"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin17->smartyFBVFormSection(array('description'=>"manager.setup.listsDescription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin18->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"numPageLinks",'value'=>$_smarty_tpl->tpl_vars['numPageLinks']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'label'=>"manager.setup.numPageLinks"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin18->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin16->smartyFBVFormArea(array('id'=>"advancedAppearanceSettings",'title'=>"manager.setup.lists"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
