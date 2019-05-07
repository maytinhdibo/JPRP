<?php

/**
 * @file plugins/blocks/makeSubmission/MakeSubmissionBlockPlugin.inc.php
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class MakeSubmissionBlockPlugin
 * @ingroup plugins_blocks_makeSubmission
 *
 * @brief Class for the "Make a Submission" block plugin
 */



import('lib.pkp.classes.plugins.BlockPlugin');

class MakeSubmissionBlockPlugin extends BlockPlugin {
	/**
	 * Get the display name of this plugin.
	 * @return String
	 */
	function getDisplayName() {
		return __('plugins.block.makeSubmission.displayName');
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return __('plugins.block.makeSubmission.description');
	}

	/**
	 * @copydoc BlockPlugin::getContents()
	 */
	function getContents($templateMgr, $request = null) {
		$context = $request->getContext();
		if (!$context) {
			return '';
		}
		return parent::getContents($templateMgr);
	}
}
