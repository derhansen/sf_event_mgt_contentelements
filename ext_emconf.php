<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Event management and registration - Content elements',
    'description' => 'Adds a relation field for content elements to events',
    'category' => 'fe',
    'author' => 'Torben Hansen',
    'author_email' => 'derhansen@gmail.com',
    'state' => 'stable',
    'version' => '2.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'php' => '8.1.0-8.2.99',
            'sf_event_mgt' => '7.1.0-7.99.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
