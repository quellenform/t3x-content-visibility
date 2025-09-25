<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Content Visibility',
    'description' => 'Control the visibility of content elements depending on the screen size.',
    'category' => 'fe',
    'state' => 'beta',
    'clearcacheonload' => true,
    'author' => 'Stephan Kellermayr',
    'author_email' => 'typo3@quellenform.at',
    'author_company' => 'Kellermayr KG',
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-13.9.99'
        ],
        'conflicts' => [],
        'suggests' => [
            'bootstrap_package' => '12.0.10-15.99'
        ]
    ]
];
