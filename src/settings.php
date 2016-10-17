<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        //'renderer' => [
         //   'template_path' => __DIR__ . '/../templates/',
        //],
        'view' => [
            'template_path' => __DIR__ . '/../templates',
            'twig' => [
                'cache' => __DIR__ . '/../cache/twig',
                'debug' => true,
                'auto_reload' => true,
            ],
        ],
        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ .'/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        //medoo
        'db' => [
            'database_type' => 'mysql',
            'database_name' => 'webappphp',
            'server' => 'localhost',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8'
        ],
    ],
];
