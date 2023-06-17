<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Event management and registration - Content elements',
    'description' => 'Adds a relation field for content elements to events',
    'category' => 'fe',
    'author' => 'Torben Hansen',
    'author_email' => 'derhansen@gmail.com',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'php' => '7.4.0-8.1.99',
            'sf_event_mgt' => '6.4.1-6.99.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
