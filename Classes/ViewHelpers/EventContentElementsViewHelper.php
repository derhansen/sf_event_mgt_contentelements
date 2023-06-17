<?php

declare(strict_types=1);

/*
 * This file is part of the Extension "sf_event_mgt_contentelements" for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Derhansen\SfEventMgtContentelements\ViewHelpers;

use TYPO3\CMS\Core\Database\Connection;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

/**
 * ViewHelper to return a string of content element uids assigned to the given event object
 */
class EventContentElementsViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    public function initializeArguments(): void
    {
        $this->registerArgument('event', 'DERHANSEN\SfEventMgt\Domain\Model\Event', 'The event');
    }

    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ): string {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tt_content');
        $event = $arguments['event'];

        $eventUid = $event->getUid();
        if ($event->_hasProperty('_languageUid') && $event->_getProperty('_languageUid') > 0) {
            // Event is localized, therefore fetch all content elements for _localizedUid
            $eventUid = $event->_getProperty('_localizedUid');
        }

        $result = $queryBuilder
            ->select('uid')
            ->from('tt_content')
            ->where(
                $queryBuilder->expr()->eq(
                    'tx_sfeventmgt_related_event',
                    $queryBuilder->createNamedParameter($eventUid, Connection::PARAM_INT)
                )
            )
            ->orderBy('sorting')
            ->execute()
            ->fetchAllAssociative();

        $contentElementUids = array_map('intval', array_column($result, 'uid'));

        return implode(',', $contentElementUids);
    }
}
