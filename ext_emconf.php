<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Page Title for Extensions',
    'description' => 'Easy setting of the page title in extensions',
    'category' => 'fe',
    'state' => 'stable',
    'author' => 'Chris Müller',
    'author_email' => 'typo3@krue.ml',
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'php' => '7.2.0-7.2.99',
            'typo3' => '9.5.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\Extpagetitle\\' => 'Classes']
    ],
];
