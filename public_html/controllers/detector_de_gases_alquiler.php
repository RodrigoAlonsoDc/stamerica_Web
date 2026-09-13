<?php  

class Detector_de_gases_alquiler extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('detector_de_gases_alquiler/index');
	}
}

?>