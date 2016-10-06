<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Theme/Sitepackage as container for code snippets of my talk',
    'description' => 'Description for ext',
    'category' => 'Theme',
    'author' => 'Josef Glatz',
    'author_email' => 'josefglatz@gmail.com',
    'author_company' => 'http://jousch.com',
    'shy' => '',
    'priority' => '',
    'module' => '',
    'state' => 'excludeFromUpdates',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '0.0.0',
    'constraints' =>
        [
            'depends' =>
                [
                    'typo3' => '8.3.0-8.99.99',
                ],
            'conflicts' =>
                [
                    'css_styled_content' => '',
                ],
            'suggests' =>
                [
                    'fluid_styled_content' => '',
                ],
        ],
];
