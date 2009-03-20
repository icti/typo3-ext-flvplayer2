<?php

########################################################################
# Extension Manager/Repository config file for ext: "flvplayer2"
#
# Auto generated 18-08-2008 12:58
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Flash Video Player v2',
	'description' => 'This Flash Video (FLV) Player allows you to show your videos more controlled and to a broader audience as with Quicktime, Windows Media or Real Media. This extension is based and backwards-compatible with extension flvplayer, adding standards compliance and an updated player.',
	'category' => 'plugin',
	'shy' => 0,
	'dependencies' => 'cms,lang,api_macmade',
	'conflicts' => 'flvplayer',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => 'uploads/tx_flvplayer/',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author' => 'Jose Antonio Guerra',
	'author_email' => 'jaguerra@icti.es',
	'author_company' => 'ICTI Consulting',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '1.0.3',
	'constraints' => array(
		'depends' => array(
			'typo3' => '3.5.0-0.0.0',
			'php' => '4.0.0-0.0.0',
			'cms' => '',
			'lang' => '',
			'api_macmade' => '',
		),
		'conflicts' => array(
			'flvplayer' => '0.0.0-0.9.0',
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:16:{s:12:"ext_icon.gif";s:4:"3b2f";s:17:"ext_localconf.php";s:4:"c5ee";s:14:"ext_tables.php";s:4:"8f96";s:28:"ext_typoscript_constants.txt";s:4:"8c14";s:24:"ext_typoscript_setup.txt";s:4:"2738";s:19:"flexform_ds_pi1.xml";s:4:"4805";s:13:"locallang.xml";s:4:"65e2";s:16:"locallang_db.xml";s:4:"034a";s:14:"doc/manual.sxw";s:4:"697a";s:16:"pi1/AC_OETags.js";s:4:"3d6a";s:14:"pi1/ce_wiz.gif";s:4:"ef09";s:31:"pi1/class.tx_flvplayer2_pi1.php";s:4:"7d25";s:39:"pi1/class.tx_flvplayer2_pi1_wizicon.php";s:4:"6e05";s:13:"pi1/clear.gif";s:4:"cc11";s:19:"pi1/mediaplayer.swf";s:4:"69ef";s:16:"pi1/swfobject.js";s:4:"66d4";}',
	'suggests' => array(
	),
);

?>