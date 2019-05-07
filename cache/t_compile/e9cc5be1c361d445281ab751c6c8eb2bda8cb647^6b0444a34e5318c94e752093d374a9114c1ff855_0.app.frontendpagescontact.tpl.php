<?php
/* Smarty version 3.1.33, created on 2019-05-07 03:59:20
  from 'app:frontendpagescontact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd10298ba1542_26449239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b0444a34e5318c94e752093d374a9114c1ff855' => 
    array (
      0 => 'app:frontendpagescontact.tpl',
      1 => 1551392383,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/editLink.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5cd10298ba1542_26449239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"about.contact"), 0, false);
?>

<div class="page page_contact">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"about.contact"), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/editLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"management",'op'=>"settings",'path'=>"context",'anchor'=>"contact",'sectionTitleKey'=>"about.contact"), 0, false);
?>

		<div class="contact_section">

		<?php if ($_smarty_tpl->tpl_vars['mailingAddress']->value) {?>
			<div class="address">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( nl2br($_smarty_tpl->tpl_vars['mailingAddress']->value) ));?>

			</div>
		<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['contactTitle']->value || $_smarty_tpl->tpl_vars['contactName']->value || $_smarty_tpl->tpl_vars['contactAffiliation']->value || $_smarty_tpl->tpl_vars['contactPhone']->value || $_smarty_tpl->tpl_vars['contactEmail']->value) {?>
			<div class="contact primary">
				<h3>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.contact.principalContact"),$_smarty_tpl ) );?>

				</h3>

				<?php if ($_smarty_tpl->tpl_vars['contactName']->value) {?>
				<div class="name">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contactName']->value ));?>

				</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['contactTitle']->value) {?>
				<div class="title">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contactTitle']->value ));?>

				</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['contactAffiliation']->value) {?>
				<div class="affiliation">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['contactAffiliation']->value ));?>

				</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['contactPhone']->value) {?>
				<div class="phone">
					<span class="label">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.contact.phone"),$_smarty_tpl ) );?>

					</span>
					<span class="value">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contactPhone']->value ));?>

					</span>
				</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['contactEmail']->value) {?>
				<div class="email">
					<a href="mailto:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contactEmail']->value ));?>
">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contactEmail']->value ));?>

					</a>
				</div>
				<?php }?>
			</div>
		<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['supportName']->value || $_smarty_tpl->tpl_vars['supportPhone']->value || $_smarty_tpl->tpl_vars['supportEmail']->value) {?>
			<div class="contact support">
				<h3>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.contact.supportContact"),$_smarty_tpl ) );?>

				</h3>

				<?php if ($_smarty_tpl->tpl_vars['supportName']->value) {?>
				<div class="name">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supportName']->value ));?>

				</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['supportPhone']->value) {?>
				<div class="phone">
					<span class="label">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.contact.phone"),$_smarty_tpl ) );?>

					</span>
					<span class="value">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supportPhone']->value ));?>

					</span>
				</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['supportEmail']->value) {?>
				<div class="email">
					<a href="mailto:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supportEmail']->value ));?>
">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supportEmail']->value ));?>

					</a>
				</div>
				<?php }?>
			</div>
		<?php }?>
	</div>

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
