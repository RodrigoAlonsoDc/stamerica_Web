<?php  

class Alquiler_luxometro_digital_TM720 extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_luxometro_digital_TM720/index');
	}
}

?>