<?php

/**
 * Extension Manager/Repository config file for ext "browserupdatenotifier".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Browser Update Notifier',
    'description' => 'Browser Update Notifier for checking which client the browser has and if an unwanted old version is on the client-side you can give a warning or the option to download a newer browser.',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Dmg\\Browserupdatenotifier\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Davy Roberts',
    'author_email' => 'd.roberts@dmg.eu',
    'author_company' => 'DMG',
    'version' => '1.0.0',
];
