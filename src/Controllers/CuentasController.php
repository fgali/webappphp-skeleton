<?php
namespace App\Controllers;

use App\Models\Cuenta;

class CuentasController extends BaseController {

	const VIEWPATH = '/Views/Cuentas/';

	public function show($request, $response) {
		$_SESSION['viewName'] = self::VIEWPATH."lista.twig";
		return $this->view->render($response, 'index.twig', compact('viewName'));
	}

	public function get($request, $response) {
		$list = 'get Cuentas';
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response;
	}

	public function getId($request, $response, $args) {
		$list = 'getId Cuentas-'.$args['id'];;
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response;
	}

	public function guardar($request, $response, $args) {
		$list = 'Guardar Cuentas';
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response;
	}

	public function eliminar($request, $response, $args) {
		$list = 'Eliminar Cuentas: '.$args['id'];
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response;
	}
}