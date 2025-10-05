<?php

defined('TYPO3') || die();

// Add static typoscript configuration for EXT:fluid_styled_content
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'content_visibility',
    'Configuration/TypoScript/FluidStyledContent/',
    'Fluid Styled Content: Content Visibility'
);

if (version_compare(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getExtensionVersion('bootstrap_package'), '13', '<')) {
    // Add static typoscript configuration for EXT:bootstrap_package
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'content_visibility',
        'Configuration/TypoScript/BootstrapPackage-12/',
        'Bootstrap Package: Content Visibility (12.x)'
    );
} else {
    // Add static typoscript configuration for EXT:bootstrap_package
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'content_visibility',
        'Configuration/TypoScript/BootstrapPackage/',
        'Bootstrap Package: Content Visibility (13+)'
    );
}
