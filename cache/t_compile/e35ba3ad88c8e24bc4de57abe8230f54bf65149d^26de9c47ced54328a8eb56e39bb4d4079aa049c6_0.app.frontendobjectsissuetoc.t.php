<?php
/* Smarty version 3.1.33, created on 2019-05-07 03:40:29
  from 'app:frontendobjectsissuetoc.t' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd0fe2df04bf6_49164539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26de9c47ced54328a8eb56e39bb4d4079aa049c6' => 
    array (
      0 => 'app:frontendobjectsissuetoc.t',
      1 => 1556869012,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/notification.tpl' => 1,
    'app:frontend/objects/article_summary.tpl' => 1,
    'app:frontend/objects/galley_link.tpl' => 1,
  ),
),false)) {
function content_5cd0fe2df04bf6_49164539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/maytinhdibo/Project/server/JPRP/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="issue-toc row">

		<?php if (!$_smarty_tpl->tpl_vars['issue']->value->getPublished()) {?>
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"warning",'messageKey'=>"editor.issues.preview"), 0, false);
?>
	<?php }?>

		<div class="heading">
		<?php $_smarty_tpl->_assignInScope('issueDetailsCol', "12");?>

				<?php $_smarty_tpl->_assignInScope('issueCover', $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl());?>
		<?php if ($_smarty_tpl->tpl_vars['issueCover']->value) {?>
			<?php $_smarty_tpl->_assignInScope('issueDetailsCol', "8");?>
			<div class="thumbnail col-md-4">
				<a class="cover" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"view",'page'=>"issue",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) ) ));?>
">
					<img class="img-responsive" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issueCover']->value ));?>
"<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() != '') {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
				</a>
			</div>
		<?php }?>


	<div class="col-md-9">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publishedArticles']->value, 'section', false, NULL, 'sections', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
?>
			<section class="section">
				<?php if ($_smarty_tpl->tpl_vars['section']->value['articles']) {?>
					<?php if ($_smarty_tpl->tpl_vars['section']->value['title']) {?>	
							<h2>
								<small><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value['title'] ));?>
</small>
							</h2>	
					<?php }?>
					<div class="media-list">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value['articles'], 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
							<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/article_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				<?php }?>
			</section>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div><!-- .sections -->


		<div class="issue-details col-md-3">

			<?php if ($_smarty_tpl->tpl_vars['issue']->value->hasDescription()) {?>
				<div class="description">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedDescription() ));?>

				</div>
			<?php }?>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['issue']->value->getPublished()) {?>
					<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['issue']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubId($_smarty_tpl->tpl_vars['issue']->value));?>				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['pubId']->value) {?>
					<?php $_smarty_tpl->_assignInScope('doiUrl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) )));?>
					<p class="pub_id <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() ));?>
">
						<strong>
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdDisplayType() ));?>
:
						</strong>
						<?php if ($_smarty_tpl->tpl_vars['doiUrl']->value) {?>
							<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['doiUrl']->value ));?>
">
								<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>

							</a>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['pubId']->value;?>

						<?php }?>
					</p>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<?php if ($_smarty_tpl->tpl_vars['issue']->value->getDatePublished()) {?>
				<p class="published">
					<strong>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submissions.published"),$_smarty_tpl ) );?>
:
					</strong>
					<?php echo smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getDatePublished() )),$_smarty_tpl->tpl_vars['dateFormatShort']->value);?>

				</p>
			<?php }?>
		</div>
	</div>

		<?php if ($_smarty_tpl->tpl_vars['issueGalleys']->value) {?>
		<div class="galleys">
			<div class="page-header">
				<h2>
					<small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.fullIssue"),$_smarty_tpl ) );?>
</small>
				</h2>
			</div>
			<div class="btn-group" role="group">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['issueGalleys']->value, 'galley');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
?>
					<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['issue']->value,'purchaseFee'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('purchaseIssueFee'),'purchaseCurrency'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('currency')), 0, true);
?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
	<?php }?>
</div><!-- .issue-toc -->
<?php }
}