<?php  

class Servicio_instalacion_mantenimiento_banco_condensadores extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('servicio_instalacion_mantenimiento_banco_condensadores/index');
	}
}

?>