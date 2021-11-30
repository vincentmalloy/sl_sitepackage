<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Sitepackage',
    'description' => 'Basic Sitepackage',
    'category' => 'templates',
    'author' => 'Simon Lundius',
    'author_email' => 'simon.lundius@protonmail.com',
    'author_company' => '',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];