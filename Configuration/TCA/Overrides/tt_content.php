<?php

defined('TYPO3') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    [
        'visibility' => [
            'exclude' => true,
            'label' => 'LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.visible.all', 0],
                    ['LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.visible.sm', 1],
                    ['LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.visible.md', 2],
                    ['LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.visible.lg', 3],
                    ['LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.visible.xl', 4],
                    ['LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.visible.xxl', 5],
                    ['LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.hidden.sm', 11],
                    ['LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.hidden.md', 12],
                    ['LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.hidden.lg', 13],
                    ['LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.hidden.xl', 14],
                    ['LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility.hidden.xxl', 15]
                ]
            ]
        ]
    ]
);

// Add custom fields to TCA
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'hidden',
    'visibility;LLL:EXT:content_visibility/Resources/Private/Language/locallang_db.xlf:tt_content.visibility'
);
