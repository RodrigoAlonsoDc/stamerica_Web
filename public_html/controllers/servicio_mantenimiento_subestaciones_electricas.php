<?php  

class Servicio_mantenimiento_subestaciones_electricas extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('servicio_mantenimiento_subestaciones_electricas/index');
	}
}

?>