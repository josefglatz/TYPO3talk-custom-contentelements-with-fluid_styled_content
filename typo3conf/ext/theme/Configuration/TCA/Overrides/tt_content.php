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


        $tca = [
            'types' => [
                'theme_tuga' => [
                    'showitem' => '
                        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                        header,
                        subheader,
                        image;Slider Images,
                        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
                    ',
                    'columnsOverrides' => [
                        'header' => [
                            'config' => [
                                'eval' => 'required'
                            ]
                        ],
                        'subheader' => [
                            'config' => [
                                'eval' => 'required'
                            ]
                        ],
                        'image' => [
                            'config' => [
                                'maxitems' => '4',
                                'minitems' => '1'
                            ]
                        ],
                    ],
                ],
            ],
        ];
        $GLOBALS['TCA']['tt_content'] = array_replace_recursive($GLOBALS['TCA']['tt_content'], $tca);

    },
    'theme'
);
