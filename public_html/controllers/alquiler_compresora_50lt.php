<?php  

class Alquiler_compresora_50lt extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_compresora_50lt/index');
	}
}

?>