<?php

namespace Derhansen\SfEventMgtContentelements\Hooks\Backend;

/*
 * This file is part of the Extension "sf_event_mgt_contentelements" for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\Database\Connection;
use TYPO3\CMS\Core\Database\Query\QueryBuilder;

/**
 * Hook into PageLayoutView to hide tt_content elements in page view
 */
class PageViewQueryHook extends AbstractBackendQueryHook
{
    protected static int $count = 0;

    /**
     * Prevent inline tt_content elements in events from being chown in the page module.
     */
    public function modifyQuery(
        array $parameters,
        string $table,
        int $pageId,
        array $additionalConstraints,
        array $fieldList,
        QueryBuilder $queryBuilder
    ): void {
        if ($table === 'tt_content' && $pageId > 0) {
            $pageRecord = BackendUtility::getRecord('pages', $pageId, 'uid', " AND doktype='254' AND module='events'");

            if (is_array($pageRecord)) {
                // Only hide elements which are inline, allowing for standard elements to show
                $queryBuilder->andWhere(
                    $queryBuilder->expr()->eq(
                        'tx_sfeventmgt_related_event',
                        $queryBuilder->createNamedParameter(0, Connection::PARAM_INT)
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
