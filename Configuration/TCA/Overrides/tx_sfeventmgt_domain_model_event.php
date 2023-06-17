<?php

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$fields = [
    'content_elements' => [
        'exclude' => true,
        'label' => 'LLL:EXT:sf_event_mgt_contentelements/Resources/Private/Language/locallang_db.xlf:tx_sfeventmgt_domain_model_event.content_elements',
        'config' => [
            'type' => 'inline',
            'allowed' => 'tt_content',
            'foreign_table' => 'tt_content',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'tx_sfeventmgt_related_event',
            'minitems' => 0,
            'maxitems' => 99,
            'appearance' => [
                'collapseAll' => true,
                'expandSingle' => true,
                'levelLinksPosition' => 'bottom',
                'useSortable' => true,
                'showPossibleLocalizationRecords' => true,
                'showRemovedLocalizationRecords' => true,
                'showAllLocalizationLink' => true,
                'showSynchronizationLink' => true,
                'enabledControls' => [
                    'info' => false,
                ],
            ],
            'behaviour' => [
                'allowLanguageSynchronization' => true,
            ],
        ],
    ],
];

ExtensionManagementUtility::addTCAcolumns('tx_sfeventmgt_domain_model_event', $fields);
ExtensionManagementUtility::addToAllTCAtypes(
    'tx_sfeventmgt_domain_model_event',
    '--div--;LLL:EXT:sf_event_mgt_contentelements/Resources/Private/Language/locallang_db.xlf:tab.content_elements,content_elements',
    '',
    'after:custom_text'
);
