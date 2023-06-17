<?php

defined('TYPO3') or die();

use Derhansen\SfEventMgtContentelements\Hooks\Backend\PageViewQueryHook;
use Derhansen\SfEventMgtContentelements\Hooks\Backend\RecordListQueryHook;
use TYPO3\CMS\Backend\View\PageLayoutView;
use TYPO3\CMS\Recordlist\RecordList\DatabaseRecordList;

// Hide content elements in list module if page is configured as event container
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][DatabaseRecordList::class]['modifyQuery'][] = RecordListQueryHook::class;

// Hide content elements in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][PageLayoutView::class]['modifyQuery'][] = PageViewQueryHook::class;
