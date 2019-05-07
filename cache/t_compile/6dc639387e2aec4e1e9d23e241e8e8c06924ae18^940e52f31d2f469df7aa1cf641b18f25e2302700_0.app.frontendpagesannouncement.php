<?php
/* Smarty version 3.1.33, created on 2019-05-07 03:43:52
  from 'app:frontendpagesannouncement' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd0fef81bdd45_91291846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '940e52f31d2f469df7aa1cf641b18f25e2302700' => 
    array (
      0 => 'app:frontendpagesannouncement',
      1 => 1551392383,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/editLink.tpl' => 1,
    'app:frontend/components/announcements.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5cd0fef81bdd45_91291846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"announcement.announcements"), 0, false);
?>

<div class="page page_announcements">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"announcement.announcements"), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/editLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"management",'op'=>"settings",'path'=>"website",'anchor'=>"announcements",'sectionTitleKey'=>"announcement.announcements"), 0, false);
?>

	<?php echo $_smarty_tpl->tpl_vars['announcementsIntroduction']->value;?>


	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/announcements.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
