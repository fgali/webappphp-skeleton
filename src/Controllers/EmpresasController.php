<?php
namespace App\Controllers;

use App\Models\Empresa;

class EmpresasController extends BaseController {

	const VIEWPATH = '/Views/Empresas/';

	public function show($request, $response) {
		$_SESSION['viewName'] = self::VIEWPATH."lista.twig";
		return $this->view->render($response, 'index.twig');
	}

	public function get($request, $response) {
		$list = 'get Empresas';
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response;
	}

	public function getId($request, $response, $args) {
		$list = 'getId Empresas -'.$args['id'];
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response;
	}

	public function guardar($request, $response, $args) {
		$list = 'Guardar Empresas';
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response;
	}

	public function eliminar($request, $response, $args) {
		$list = 'Eliminar Empresas: '.$args['id'];
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response;
	}
}