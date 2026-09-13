<?php  

class Venta_suministros_cables extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('venta_suministros_cables/index');
	}
}

?>