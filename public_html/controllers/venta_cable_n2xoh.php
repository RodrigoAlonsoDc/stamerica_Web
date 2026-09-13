<?php  

class Venta_cable_n2xoh extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('venta_cable_n2xoh/index');
	}
}

?>