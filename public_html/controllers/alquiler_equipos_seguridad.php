<?php  

class Alquiler_equipos_seguridad extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_equipos_seguridad/index');
	}
}

?>