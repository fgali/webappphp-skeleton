<?php
namespace App\Controllers;

//use App\Models\Users;

class HomeController extends BaseController {

	const VIEWPATH = '/Views/Home/';

	public function show($request, $response) {

		$_SESSION['viewName'] = self::VIEWPATH."dashboard.twig";

		//$path = $this->router->pathFor('home');
		//$path = $this->router->getNamedRoute('home');
		//exit($path);
		$path = $this->router->relativePathFor('home');

		$path = $this->router->pathFor('home');
		$type = gettype($this->router);
		$class = get_class($this->router);
		$methods = get_class_methods($this->router);
		//var_dump([$type, $class, $methods]);
		
		return $this->view->render($response, 'index.twig', compact('path'));
	}
}