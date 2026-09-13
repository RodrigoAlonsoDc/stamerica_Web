<?php  

class Alquiler_equipos_construccion extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_equipos_construccion/index');
	}
}

?>