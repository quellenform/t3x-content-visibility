<?php

defined('TYPO3') || die();

// Add static typoscript configuration for EXT:fluid_styled_content
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'content_visibility',
    'Configuration/TypoScript/FluidStyledContent/',
    'Content Visibility: Fluid Styled Content'
);

// Add static typoscript configuration for EXT:bootstrap_package
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'content_visibility',
    'Configuration/TypoScript/BootstrapPackage14/',
    'Content Visibility: Bootstrap Package v14.x'
);
