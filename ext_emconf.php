<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Event management and registration - Content elements',
    'description' => 'Adds a relation field for content elements to events',
    'category' => 'fe',
    'author' => 'Torben Hansen',
    'author_email' => 'derhansen@gmail.com',
    'state' => 'stable',
    'version' => '3.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'sf_event_mgt' => '8.0.0-8.99.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
