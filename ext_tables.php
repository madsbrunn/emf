<?php
if (!defined('TYPO3_MODE')) {die ('Access denied.');}

if (TYPO3_MODE == 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) { 
    
    /**
    * Registers a Backend Module
    */
    Tx_Extbase_Utility_Extension::registerModule(
        $_EXTKEY,
        'web',    // Make module a submodule of 'web'
        'emf',    // Submodule key
        '', // Position
        array(
                // An array holding the controller-action-combinations that are accessible
            'Emf' => 'index'
        ),
        array(
            'access' => 'user,group',
            'icon'   => 'EXT:'.$_EXTKEY.'/Resources/Public/Images/moduleicon.gif',
            'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xml',
            'navigationComponentId' => 'typo3-pagetree',
        )
    );
    
}


?>
