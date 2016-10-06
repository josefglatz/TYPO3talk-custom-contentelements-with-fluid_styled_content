<?php

defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey) {

        // Add PageTSConfig
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '<INCLUDE_TYPOSCRIPT: source="DIR: EXT:' . $extKey . '/Configuration/TSConfig/Page/General" extensions="tsc">'
        );
    },
    $_EXTKEY
);
