<?php  

class Alquiler_kit_proteccion_antiarco extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_kit_proteccion_antiarco/index');
	}
}

?>