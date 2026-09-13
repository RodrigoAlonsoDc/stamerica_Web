<?php  

class Alquiler_tronzadora extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_tronzadora/index');
	}
}

?>