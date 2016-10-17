<?php

//Rutas del ApiV1

$app->group('/api/v1/empresas', function () {

    $this->get('', 'EmpresasController:get')->setName('api/Empresas');
    $this->get('/{id}', 'EmpresasController:getId')->setName('api/Empresas');
    $this->post('', 'EmpresasController:guardar')->setName('api/Empresas');
    $this->delete('/{id}', 'EmpresasController:eliminar')->setName('api/Empresas');

});

$app->group('/api/v1/personas', function () {

    $this->get('', 'PersonasController:get')->setName('api/Personas');
    $this->get('/{id}', 'PersonasController:getId')->setName('api/Personas');
    $this->post('', 'PersonasController:guardar')->setName('api/Personas');
    $this->delete('/{id}', 'PersonasController:eliminar')->setName('api/Personas');

});

$app->group('/api/v1/cuentas', function () {

    $this->get('', 'CuentasController:get')->setName('api/Cuentas');
    $this->get('/{id}', 'CuentasController:getId')->setName('api/Cuentas');
    $this->post('', 'CuentasController:guardar')->setName('api/Cuentas');
    $this->delete('/{id}', 'CuentasController:eliminar')->setName('api/Cuentas');

});

$app->group('/api/v1/polizas', function () {

    $this->get('', 'PolizasController:get')->setName('api/Polizas');
    $this->get('/{id}', 'PolizasController:getId')->setName('api/Polizas');
    $this->post('', 'PolizasController:guardar')->setName('api/Polizas');
    $this->delete('/{id}', 'PolizasController:eliminar')->setName('api/Polizas');

});

$app->group('/api/v1/perfiles', function () {

    $this->get('', 'PerfilesController:get')->setName('api/Perfiles');
    $this->get('/{id}', 'PerfilesController:getId')->setName('api/Perfiles');
    $this->post('', 'PerfilesController:guardar')->setName('api/Perfiles');
    $this->delete('/{id}', 'PerfilesController:eliminar')->setName('api/Perfiles');

});

$app->group('/api/v1/usuarios', function () {

    /*$this->map(['GET', 'DELETE', 'PATCH', 'PUT'], '', function ($request, $response, $args) {
        $list = 'hola';
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
    })->setName('user');*/

    $this->get('', 'UsuariosController:get')->setName('api/usuarios');
    $this->get('/{id}', 'UsuariosController:getId')->setName('api/usuarios');
	$this->post('', 'UsuariosController:guardar')->setName('api/usuarios');
    $this->delete('/{id}', 'UsuariosController:eliminar')->setName('api/usuarios');

});


/*Utilities*/

