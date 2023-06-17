<?php

namespace Derhansen\SfEventMgtContentelements\Hooks\Backend;

/*
 * This file is part of the Extension "sf_event_mgt_contentelements" for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Localization\LanguageService;
use TYPO3\CMS\Core\Messaging\FlashMessage;
use TYPO3\CMS\Core\Messaging\FlashMessageService;
use TYPO3\CMS\Core\Utility\GeneralUtility;

abstract class AbstractBackendQueryHook
{
    public const LLL = 'LLL:EXT:sf_event_mgt_contentelements/Resources/Private/Language/locallang_be.xlf:';

    protected function addFlashMessage(string $messageKey): void
    {
        $message = GeneralUtility::makeInstance(
            FlashMessage::class,
            $this->getLanguageService()->sL(self::LLL . $messageKey),
            '',
            FlashMessage::INFO
        );
        $flashMessageService = GeneralUtility::makeInstance(FlashMessageService::class);
        $defaultFlashMessageQueue = $flashMessageService->getMessageQueueByIdentifier();
        $defaultFlashMessageQueue->enqueue($message);
    }

    protected function getLanguageService(): LanguageService
    {
        return $GLOBALS['LANG'];
    }
}
