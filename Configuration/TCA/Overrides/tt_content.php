<?php

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$fields = [
    'tx_sfeventmgt_related_events' => [
        'label' => 'tx_sfeventmgt_related_events',
        'config' => [
            'type' => 'passthrough',
        ],
    ],
];
ExtensionManagementUtility::addTCAcolumns('tt_content', $fields);
