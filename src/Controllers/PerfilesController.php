<?php
namespace App\Controllers;

use App\Models\Perfil;

class PerfilesController extends BaseController {

	const VIEWPATH = '/Views/Perfiles/';

	public function show($request, $response) {
		$_SESSION['viewName'] = self::VIEWPATH."lista.twig";
		return $this->view->render($response, 'index.twig', compact('viewName'));
	}

	public function get($request, $response) {
		$list = 'get Perfiles';
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response;
	}

	public function getId($request, $response, $args) {
		$list = 'getId Perfiles-'.$args['id'];;
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response;
	}

	public function guardar($request, $response, $args) {
		$list = 'Guardar Perfiles';
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response;
	}

	public function eliminar($request, $response, $args) {
		$list = 'Eliminar Perfiles: '.$args['id'];
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response;
	}
}