<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}


//PageTS inlude
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile($_EXTKEY,'Configuration/PageTS/setup.txt','Megafry Template PageTS');

//TS inlude 
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'Megafry Template');

/*
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Content', 'Megafry Template content');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/GetContent', 'Megafry Template lib.GetContent');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/CSS', 'Megafry Template CSS');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/JavaScript', 'Megafry Template JavaScript');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Gridelement', 'Megafry Template Gridelement');
*/