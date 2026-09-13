<?php  

class Alquiler_radio_comunicacion_PD506 extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_radio_comunicacion_PD506/index');
	}
}

?>