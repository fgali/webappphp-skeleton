<?php
namespace App\Controllers;

use App\Models\Usuario;

class AcountController extends BaseController {

	public function show($request, $response) {
		//$path = $this->router->pathFor('mt');
		//exit($path);
		return $this->view->render($response, 'login.twig');
	}

	public function logIn($request, $response) {
		//$allPostPutVars = $request->getParsedBody();
		$usu = $request->getParam('usuario');
		$cont = $request->getParam('contrasena');

		if($usu == "" || $cont == ""){
			//$this->flash->addMessage('errorLogIn', 'Debe ingresar el usuario y la contraseña');
			$args['errorLogIn'] = "Debe ingresar el usuario y la contraseña.";
			return $this->view->render($response, 'login.twig', $args);
		}

		$usuario = new Usuario($this->container);
		
		$rows = $usuario->select('*', ["AND" => [
										"usu_usuario[=]" => $usu,
										"usu_contrasena[=]" => $cont
									]
								]);
		if(count($rows) <= 0){
			//$this->flash->addMessage('errorLogIn', 'Usuario o contraseña incorrectos.');
			$args['errorLogIn'] = "Usuario o contraseña incorrectos.";
			$args['usuario'] = $request->getParam('usuario');
			return $this->view->render($response, 'login.twig', $args);
		}else{
			$_SESSION['logged'] = true;
			$_SESSION['usuario'] = $rows[0];

			return $response->withRedirect($this->router->pathFor('home'), 301);
		}

		return $this->view->render($response, 'login.twig');
	}

	public function signOut($request, $response) {
		$_SESSION['logged'] = false;
		unset($_SESSION['logged']);
		$_SESSION = array();
		
		if (ini_get("session.use_cookies")) {
		    $params = session_get_cookie_params();
		    setcookie(session_name(), '', time() - 42000,
		        $params["path"], $params["domain"],
		        $params["secure"], $params["httponly"]
		    );
		}

		session_destroy();

        return $response->withRedirect($this->router->pathFor('login'), 301);
	}

	/*public function users($request, $response) {
		$users = new Users($this->container);
		$all = $users->select('*');
		$_SESSION['titulo'] = "Usuarios";

		//$response->withHeader('Content-Type', 'application/json');
        //$response->write(json_encode($all));
        //return $response;

		return $this->renderer->render($response, 'users.phtml', compact('all'));
	}*/

}