<?php  

class Equipos_en_alquiler extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('equipos_en_alquiler/index');
	}
}

?>