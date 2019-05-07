<?php
/* Smarty version 3.1.33, created on 2019-05-07 03:37:31
  from 'app:frontendcomponentsnavigat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd0fd7b19b224_77024041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9be0ecfd9cc66bba6b2c896d74703d29644ffc5' => 
    array (
      0 => 'app:frontendcomponentsnavigat',
      1 => 1554975869,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd0fd7b19b224_77024041 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['navigationMenuItem']->value->getLocalizedTitle() ));?>

<span class="badge">
	<?php echo $_smarty_tpl->tpl_vars['unreadNotificationCount']->value;?>

</span>
<?php }
}
