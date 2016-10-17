<?php
namespace App\Controllers;

//use App\Models\Users;

class ReportesController extends BaseController {

	public function show($request, $response) {
		$viewName = "Reportes";
		return $this->view->render($response, 'index.twig', compact('viewName'));
	}
}