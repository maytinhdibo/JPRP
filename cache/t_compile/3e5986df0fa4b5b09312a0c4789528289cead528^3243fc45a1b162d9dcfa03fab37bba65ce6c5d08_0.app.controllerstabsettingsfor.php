<?php
/* Smarty version 3.1.33, created on 2019-05-07 04:36:24
  from 'app:controllerstabsettingsfor' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd10b48120277_44314279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3243fc45a1b162d9dcfa03fab37bba65ce6c5d08' => 
    array (
      0 => 'app:controllerstabsettingsfor',
      1 => 1551392383,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkAction.tpl' => 1,
  ),
),false)) {
function content_5cd10b48120277_44314279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/maytinhdibo/Project/server/JPRP/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div class="pkp_form_file_view pkp_form_image_view">

	<div class="img">
		<img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value['uploadName'],"url" ));?>
?<?php echo $_smarty_tpl->tpl_vars['file']->value['dateUploaded'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['commonAltText']->value;?>
" />
	</div>

	<div class="data">
		<span class="title">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.fileName"),$_smarty_tpl ) );?>

		</span>
		<span class="value">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value['name'] ));?>

		</span>
		<span class="title">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.uploadedDate"),$_smarty_tpl ) );?>

		</span>
		<span class="value">
			<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['file']->value['dateUploaded'],$_smarty_tpl->tpl_vars['datetimeFormatShort']->value);?>

		</span>
		<span class="title">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.altText"),$_smarty_tpl ) );?>

		</span>
		<span class="value">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value['altText'] ));?>

		</span>

		<div id="<?php echo $_smarty_tpl->tpl_vars['deleteLinkAction']->value->getId();?>
" class="actions">
			<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['deleteLinkAction']->value,'contextId'=>$_smarty_tpl->tpl_vars['fileSettingName']->value), 0, false);
?>
		</div>
	</div>
</div>
<?php }
}
