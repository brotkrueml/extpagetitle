<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Page Title for Extensions',
    'description' => 'Easy setting of the browser page title in extensions',
    'category' => 'fe',
    'state' => 'stable',
    'author' => 'Chris Müller',
    'author_email' => 'typo3@brotkrueml.dev',
    'version' => '1.5.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-14.3.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\Extpagetitle\\' => 'Classes']
    ],
];
