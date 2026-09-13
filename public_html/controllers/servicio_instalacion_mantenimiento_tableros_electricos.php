<?php  

class Servicio_instalacion_mantenimiento_tableros_electricos extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('servicio_instalacion_mantenimiento_tableros_electricos/index');
	}
}

?>