<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
/*$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};
*/
/*
//Para recibir cada parametro por separado
$container['foundHandler'] = function() {
    return new \Slim\Handlers\Strategies\RequestResponseArgs();
};
*/
//view Twig
$container['view'] = function ($c) {
    $settings = $c->get('settings');
    $view = new Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);

    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));
    $view->addExtension(new Twig_Extension_Debug());

    $view->getEnvironment()->addGlobal('flash', $c->flash); // this
    $view->getEnvironment()->addGlobal('session', $_SESSION);
    
    return $view;
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};
// medoo
$container['db'] = function ($c) {
	$settings = $c->get('settings')['db'];
	$database = new medoo($settings);
    return $database;
};

// flash
$container['flash'] = function ($c) {
    return new \Slim\Flash\Messages();
};


// agregar conroladores
$container['AcountController'] = function ($c) {
    return new \App\Controllers\AcountController($c);
};

$container['HomeController'] = function ($c) {
    return new \App\Controllers\HomeController($c);
};

$container['EmpresasController'] = function ($c) {
    return new \App\Controllers\EmpresasController($c);
};

$container['PersonasController'] = function ($c) {
    return new \App\Controllers\PersonasController($c);
};

$container['CuentasController'] = function ($c) {
    return new \App\Controllers\CuentasController($c);
};

$container['PolizasController'] = function ($c) {
    return new \App\Controllers\PolizasController($c);
};

$container['UsuariosController'] = function ($c) {
    return new \App\Controllers\UsuariosController($c);
};

$container['PerfilesController'] = function ($c) {
    return new \App\Controllers\PerfilesController($c);
};

$container['ReportesController'] = function ($c) {
    return new \App\Controllers\ReportesController($c);
};