<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Page Title for Extensions',
    'description' => 'Easy setting of the browser page title in extensions',
    'category' => 'fe',
    'state' => 'stable',
    'author' => 'Chris Müller',
    'author_email' => 'typo3@krue.ml',
    'version' => '1.2.0-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\Extpagetitle\\' => 'Classes']
    ],
];
