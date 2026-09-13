<?php  

class Alquiler_apisonadora_95hp extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_apisonadora_95hp/index');
	}
}

?>