<?php

declare(strict_types=1);

namespace Derhansen\SfEventMgtContentelements\Form\FormDataProvider;

use TYPO3\CMS\Backend\Form\FormDataProviderInterface;

final readonly class AllowedRecordTypes implements FormDataProviderInterface
{
    public function addData(array $result): array
    {
        if ($result['tableName'] !== 'tt_content' || (bool)$result['isInlineChild'] === false) {
            return $result;
        }

        $inlineParentTableName = $result['inlineParentTableName'];
        if ($inlineParentTableName !== 'tx_sfeventmgt_domain_model_event') {
            return $result;
        }

        // @todo make configurable
        $result['processedTca']['columns']['CType']['config']['items'] = [
            [
                'label' => 'Regular Text Element',
                'value' => 'text',
                'icon' => 'content-text',
                'group' => 'default',
            ]
        ];

        return $result;
    }
}
