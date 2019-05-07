<?php
/* Smarty version 3.1.33, created on 2019-05-07 04:36:24
  from 'core:controllerstabsettingsapp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd10b481f3fa2_10350279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79701189473a2f3a3ce9c3d5aa4223a801f604b0' => 
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
function content_5cd10b481f3fa2_10350279 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"pageFooterContainer",'title'=>"manager.setup.pageFooter"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormArea(array('id'=>"pageFooterContainer",'title'=>"manager.setup.pageFooter"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('description'=>"manager.setup.pageFooterDescription"));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormSection(array('description'=>"manager.setup.pageFooterDescription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'multilingual'=>true,'name'=>"pageFooter",'id'=>"pageFooter",'value'=>$_smarty_tpl->tpl_vars['pageFooter']->value,'rich'=>true),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormSection(array('description'=>"manager.setup.pageFooterDescription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin4->smartyFBVFormArea(array('id'=>"pageFooterContainer",'title'=>"manager.setup.pageFooter"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
