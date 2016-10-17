<?php
namespace App\Controllers;

use App\Models\Usuario;

class UsuariosController extends BaseController {

	const VIEWPATH = '/Views/Usuarios/';
	
	public function show($request, $response) {
		$_SESSION['viewName'] = self::VIEWPATH."lista.twig";
		return $this->view->render($response, 'index.twig', compact('viewName'));
	}

	public function get($request, $response) {
		$usuario = new Usuario($this->container);
		$list = $usuario->select('*');
		return $response->withJson($list, 201, $encodingOptions);
	}

	public function getId($request, $response, $args) {
		$id = $args['id'];
		$usuario = new Usuario($this->container);
		$list = $usuario->select('*', ["usu_id[=]" => $id]);
		return $response->withJson($list, 201, $encodingOptions);
	}

	public function guardar($request, $response, $args) {
		$list = 'Guardar Usuario';
		$response->withHeader('Content-Type', 'application/json');
        $response->write(json_encode($list));
        return $response->withJson([$list], 201, $encodingOptions);
	}

	public function eliminar($request, $response, $args) {
		$list = 'Eliminar Usuario: '.$args['id'];
		return $response->withJson([$list], 201, $encodingOptions);
	}
}