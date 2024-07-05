<?php

declare(strict_types=1);

namespace Quellenform\ContentVisibility\DataProcessing;

/*
 * This file is part of the "content_visibility" Extension for TYPO3 CMS.
 *
 * Conceived and written by Stephan Kellermayr
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

/**
 * DataProcessor to generate visibility settings
 *
 * TypoScript configuration
 *
 * 10 = Quellenform\ContentVisibility\DataProcessing\VisibilityProcessor
 * 10 {
 *   classMapping < plugin.tx_content_visibility.classMapping
 * }
 */
class VisibilityProcessor implements DataProcessorInterface
{
    /**
     * Process data
     *
     * @param ContentObjectRenderer $cObj The data of the content element or page
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ) {
        if (isset($processorConfiguration['if.']) && !$cObj->checkIf($processorConfiguration['if.'])) {
            return $processedData;
        }

        $fieldName = 'visibility';

        // Get settings from TypoScript
        if (
            empty($processorConfiguration['classMapping.']) ||
            !is_array($processorConfiguration['classMapping.'])
        ) {
            return $processedData;
        }
        $cssMapping = $processorConfiguration['classMapping.'];

        // Get value from database
        $fieldValue = $cObj->data[$fieldName];

        // Fill output with values from TypoScript
        $output = '';
        if (array_key_exists($fieldValue, $cssMapping)) {
            $output = $cssMapping[$fieldValue];
        } else {
            // Use default value (if set)
            $defaultKey = 0;
            if (
                isset($processorConfiguration['default']) &&
                !empty($processorConfiguration['default'])
            ) {
                $defaultKey = intval($processorConfiguration['default']);
            }
            if (array_key_exists($defaultKey, $cssMapping)) {
                $output = $cssMapping[$defaultKey];
            }
        }

        // Append additioonal class(es) to exsiting fields of bootstrap_package
        if (
            isset($processedData['frameAttributes']) &&
            is_array($processedData['frameAttributes'])
        ) {
            if (!empty($processedData['frameAttributes']['class'])) {
                $processedData['frameAttributes']['class'] .= ' ' . $output;
            } else {
                $processedData['frameAttributes']['class'] = $output;
            }
        }

        // Replace original field value
        $processedData['data'][$fieldName] = $output;

        return $processedData;
    }
}
