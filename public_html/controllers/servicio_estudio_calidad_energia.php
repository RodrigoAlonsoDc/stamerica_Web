<?php  

class Servicio_estudio_calidad_energia extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('servicio_estudio_calidad_energia/index');
	}
}

?>