<?php

// Routes

//Login
$app->get('/login', 'AcountController:show')->setName('login');
$app->post('/login', 'AcountController:logIn')->setName('login');
$app->get('/signout', 'AcountController:signOut')->setName('signOut');

//Home
$app->get('/', 'HomeController:show')->setName('home');
$app->get('home', 'HomeController:show')->setName('home');

//Empresas
$app->get('/empresas', 'EmpresasController:show')->setName('Empresas');

//Personas
$app->get('/personas', 'PersonasController:show')->setName('Personas');

//Cuentas
$app->get('/cuentas', 'CuentasController:show')->setName('Cuentas');

//Movimientos
$app->get('/polizas', 'PolizasController:show')->setName('Polizas');

//Usuarios
$app->get('/usuarios', 'UsuariosController:show')->setName('Usuarios');

//Perfiles
$app->get('/perfiles', 'PerfilesController:show')->setName('Perfiles');

//Reportes
$app->get('/reportes', 'ReportesController:show')->setName('Reportes');


