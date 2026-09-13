<?php  

class Alquiler_equipos_medicion extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_equipos_medicion/index');
	}
}

?>