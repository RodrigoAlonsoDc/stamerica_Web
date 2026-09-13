<?php  

class Alquiler_juego_tarrajas extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_juego_tarrajas/index');
	}
}

?>