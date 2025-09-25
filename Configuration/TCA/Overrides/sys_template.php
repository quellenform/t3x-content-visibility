<?php

defined('TYPO3') || die();

// Add static typoscript configuration for EXT:fluid_styled_content
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'content_visibility',
    'Configuration/TypoScript/FluidStyledContent/',
    'Content Visibility for "Fluid Styled Content"'
);

if (version_compare(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getExtensionVersion('bootstrap_package'), '13', '<')) {
    // Add static typoscript configuration for EXT:bootstrap_package
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'content_visibility',
        'Configuration/TypoScript/BootstrapPackage-12/',
        'Content Visibility for "Bootstrap Package 12.x"'
    );
} else {
    // Add static typoscript configuration for EXT:bootstrap_package
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'content_visibility',
        'Configuration/TypoScript/BootstrapPackage/',
        'Content Visibility for "Bootstrap Package"'
    );
}
