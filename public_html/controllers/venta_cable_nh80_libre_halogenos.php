<?php  

class Venta_cable_nh80_libre_halogenos extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('venta_cable_nh80_libre_halogenos/index');
	}
}

?>