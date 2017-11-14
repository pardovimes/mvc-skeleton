<?php
return [
    // List of defined modules to run
    'modules' => [
        'Zend\Mvc\Console',
        'Zend\Router',
        'Application',
    ],

    // Module paths to look at
    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],
    ],
];
