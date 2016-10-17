<?php
namespace App\Controllers;

use App\Models\Persona;

class PersonasController extends BaseController {

	const VIEWPATH = '/Views/Personas/';

	public function show($request, $response) {
		$_SESSION['viewName'] = self::VIEWPATH."lista.twig";
		return $this->view->render($response, 'index.twig');
	}

	public function get($request, $response) {
		$list = 'get Personas';
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response;
	}

	public function getId($request, $response, $args) {
		$list = 'getId Personas-'.$args['id'];;
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response;
	}

	public function guardar($request, $response, $args) {
		$list = 'Guardar Personas';
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response;
	}

	public function eliminar($request, $response, $args) {
		$list = 'Eliminar Personas: '.$args['id'];
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response;
	}
}