<?php  

class Venta_cable_vulcanizado extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('venta_cable_vulcanizado/index');
	}
}

?>