<?php  

class Venta_cable_afirenas_xas_rz1 extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('venta_cable_afirenas_xas_rz1/index');
	}
}

?>