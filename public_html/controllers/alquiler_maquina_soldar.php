<?php  

class Alquiler_maquina_soldar extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_maquina_soldar/index');
	}
}

?>