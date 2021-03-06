<?php
session_start();

//session_regenerate_id(true);  

require __DIR__.'/../vendor/autoload.php';
$settings = require __DIR__.'/../src/settings.php';
$app = new Slim\App($settings);
require __DIR__.'/../src/dependencies.php';
require __DIR__.'/../src/middleware.php';

require __DIR__.'/../src/routesApi.php';
require __DIR__.'/../src/routes.php';

$app->run();
