<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey) {


        // CE TUGA
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
            [
                'TUGA Content Element',
                'theme_tuga',
                'content-textmedia'
            ],
            'CType',
            $extKey
        );

    },
    'theme'
);
