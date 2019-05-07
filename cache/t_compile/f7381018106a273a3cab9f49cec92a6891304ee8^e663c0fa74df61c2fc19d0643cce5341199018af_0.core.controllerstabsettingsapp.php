<?php
/* Smarty version 3.1.33, created on 2019-05-07 04:36:24
  from 'core:controllerstabsettingsapp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd10b482927e2_14874740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e663c0fa74df61c2fc19d0643cce5341199018af' => 
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
function content_5cd10b482927e2_14874740 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"additionalHomeContent",'label'=>"manager.setup.additionalContent",'description'=>"manager.setup.additionalContentDescription"));
$_block_repeat=true;
echo $_block_plugin15->smartyFBVFormSection(array('for'=>"additionalHomeContent",'label'=>"manager.setup.additionalContent",'description'=>"manager.setup.additionalContentDescription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'multilingual'=>true,'name'=>"additionalHomeContent",'id'=>"additionalHomeContent",'value'=>$_smarty_tpl->tpl_vars['additionalHomeContent']->value,'rich'=>true),$_smarty_tpl ) );?>

<?php $_block_repeat=false;
echo $_block_plugin15->smartyFBVFormSection(array('for'=>"additionalHomeContent",'label'=>"manager.setup.additionalContent",'description'=>"manager.setup.additionalContentDescription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
