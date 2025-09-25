<?php

defined('TYPO3') || die();

(function () {

    $visibilityItems = [
        [
            'label' => 'LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.visible.all',
            'value' => 0
        ],
        [
            'label' => 'LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.visible.sm',
            'value' => 1
        ],
        [
            'label' => 'LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.visible.md',
            'value' => 2
        ],
        [
            'label' => 'LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.visible.lg',
            'value' => 3
        ],
        [
            'label' => 'LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.visible.xl',
            'value' => 4
        ],
        [
            'label' => 'LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.visible.xxl',
            'value' => 5
        ],
        [
            'label' => 'LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.hidden.sm',
            'value' => 11
        ],
        [
            'label' => 'LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.hidden.md',
            'value' => 12
        ],
        [
            'label' => 'LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.hidden.lg',
            'value' => 13
        ],
        [
            'label' => 'LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.hidden.xl',
            'value' => 14
        ],
        [
            'label' => 'LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.hidden.xxl',
            'value' => 15
        ]
    ];
    // Restructure items array for TYPO3 v10/11
    if (version_compare(\TYPO3\CMS\Core\Utility\VersionNumberUtility::getCurrentTypo3Version(), '12', '<')) {
        foreach ($visibilityItems as &$item) {
            $item = [
                $item['label'],
                $item['value']
            ];
        }
    }

    // Register field
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        [
            'visibility' => [
                'exclude' => true,
                'label' => 'LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => $visibilityItems
                ]
            ]
        ]
    );

    // Add custom field to TCA
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tt_content',
        'hidden',
        'visibility;LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility'
    );
})();
