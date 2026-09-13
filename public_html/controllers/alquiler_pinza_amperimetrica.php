<?php  

class Alquiler_pinza_amperimetrica extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_pinza_amperimetrica/index');
	}
}

?>