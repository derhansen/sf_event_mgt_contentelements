<?php

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
    'sf_event_mgt_contentelements',
    'Configuration/TypoScript',
    'Event management and registration - Content elements'
);
