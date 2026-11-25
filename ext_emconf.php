<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Ps14 Modules',
    'description' => 'Content elements (modules) as Content Blocks: accordion, tabs and timeline.',
    'category' => 'fe',
    'author' => 'Christian Pschorr',
    'author_email' => 'pschorr.christian@gmail.com',
    'author_company' => '',
    'state' => 'alpha',
    'version' => '14.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '14.0.0-14.99.99',
            'content_blocks' => '2.4.0-2.99.99',
            'ps14_foundation' => '14.0.0-14.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
