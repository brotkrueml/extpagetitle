<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Page Title for Extensions',
    'description' => 'Easy setting of the browser page title in extensions',
    'category' => 'fe',
    'state' => 'stable',
    'author' => 'Chris Müller',
    'author_email' => 'typo3@krue.ml',
    'version' => '1.3.0-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\Extpagetitle\\' => 'Classes']
    ],
];
