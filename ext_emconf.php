<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Event management and registration - Content elements',
    'description' => 'Adds a relation field for content elements to events',
    'category' => 'fe',
    'author' => 'Torben Hansen',
    'author_email' => 'derhansen@gmail.com',
    'state' => 'stable',
    'version' => '4.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.3.0-14.3.99',
            'sf_event_mgt' => '9.0.0-9.99.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
