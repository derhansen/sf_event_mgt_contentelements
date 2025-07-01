<?php

defined('TYPO3') or die();

use Derhansen\SfEventMgtContentelements\Form\FormDataProvider\AllowedRecordTypes;
use TYPO3\CMS\Backend\Form\FormDataProvider\TcaSelectItems;

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][AllowedRecordTypes::class] = [
    'depends' => [
        TcaSelectItems::class,
    ],
];
