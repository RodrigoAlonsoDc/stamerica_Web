<?php  

class Alquiler_pertiga_3cuerpos extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_pertiga_3cuerpos/index');
	}
}

?>