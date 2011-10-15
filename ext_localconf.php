<?php
if (!defined('TYPO3_MODE')) {die ('Access denied.');}

if (!defined ('PATH_tx'.$_EXTKEY)) {
    define('PATH_tx'.$_EXTKEY, t3lib_extMgm::extPath($_EXTKEY));
}

if (!defined ('PATH_tx'.$_EXTKEY.'_rel')) {
    define('PATH_tx'.$_EXTKEY.'_rel', t3lib_extMgm::extRelPath($_EXTKEY));
}

if (!defined ('PATH_tx'.$_EXTKEY.'._siteRel')) {
    define('PATH_tx'.$_EXTKEY.'_siteRel', t3lib_extMgm::siteRelPath($_EXTKEY));
}

if(isset($TYPO3_CONF_VARS['EXT']['extConf'][$_EXTKEY])){
	$tmp_extConf = unserialize($TYPO3_CONF_VARS['EXT']['extConf'][$_EXTKEY]);
}


?>
