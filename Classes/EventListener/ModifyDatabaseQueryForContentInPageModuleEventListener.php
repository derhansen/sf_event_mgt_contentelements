<?php

declare(strict_types=1);

/*
 * This file is part of the Extension "sf_event_mgt_contentelements" for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Derhansen\SfEventMgtContentelements\EventListener;

use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Backend\View\Event\ModifyDatabaseQueryForContentEvent;
use TYPO3\CMS\Core\Database\Connection;

/**
 * Event listener to hide tt_content elements in page view
 */
class ModifyDatabaseQueryForContentInPageModuleEventListener extends AbstractModifyDatabaseQueryForContentEventListener
{
    protected static int $count = 0;

    public function __invoke(ModifyDatabaseQueryForContentEvent $event): void
    {
        if ($event->getTable() === 'tt_content' && $event->getPageId() > 0) {
            $pageRecord = BackendUtility::getRecord('pages', $event->getPageId(), 'uid', " AND doktype='254' AND module='events'");

            if (is_array($pageRecord)) {
                // Only hide elements which are inline, allowing for standard elements to show
                $event->getQueryBuilder()->andWhere(
                    $event->getQueryBuilder()->expr()->eq(
                        'tx_sfeventmgt_related_event',
                        $event->getQueryBuilder()->createNamedParameter(0, Connection::PARAM_INT)
                    )
                );

                if (self::$count === 0) {
                    $this->addFlashMessage('hiddenContentElements.description');
                }

                self::$count++;
            }
        }
    }
}
