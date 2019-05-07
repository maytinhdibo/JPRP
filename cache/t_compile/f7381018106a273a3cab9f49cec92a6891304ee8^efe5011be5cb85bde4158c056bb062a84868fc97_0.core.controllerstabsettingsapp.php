<?php
/* Smarty version 3.1.33, created on 2019-05-07 04:36:24
  from 'core:controllerstabsettingsapp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd10b4819c445_61783770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efe5011be5cb85bde4158c056bb062a84868fc97' => 
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
function content_5cd10b4819c445_61783770 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#appearanceForm').pkpHandler('$.pkp.controllers.tab.settings.form.FileViewFormHandler',
			{
				fetchFileUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>'fetchFile','tab'=>'appearance','escape'=>false),$_smarty_tpl ) ));?>

			}
		);
	});
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['wizardMode']->value) {?>
	<?php $_smarty_tpl->_assignInScope('wizardClass', "is_wizard_mode");
} else { ?>
	<?php $_smarty_tpl->_assignInScope('wizardClass', '');
}
}
}
