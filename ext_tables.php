<?php
if ( !defined( 'TYPO3_MODE' ) ) {
    die( 'Access denied.' );
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript', 'Feedreader' );

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_feedreader_domain_model_feed', 'EXT:feedreader/Resources/Private/Language/locallang.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_feedreader_domain_model_feed');
$GLOBALS['TCA']['tx_feedreader_domain_model_feed'] = array(
    'ctrl' => array(
        'title'	=> 'LLL:EXT:feedreader/Resources/Private/Language/locallang.xlf:tx_feedreader_domain_model_feed',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => TRUE,

        'versioningWS' => 2,
        'versioning_followPages' => TRUE,

        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'searchFields' => 'name,url,',
        'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Feed.php',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_feedreader_domain_model_feed.gif'
    ),
);