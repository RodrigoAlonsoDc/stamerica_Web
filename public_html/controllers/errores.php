<?php  

class Errores extends Controller{

	function __construct(){
		parent::__construct();
		http_response_code(404);
		$this->view->mensaje = "Página no encontrada";
		$this->view->render('errores/index');
	}
}

?>