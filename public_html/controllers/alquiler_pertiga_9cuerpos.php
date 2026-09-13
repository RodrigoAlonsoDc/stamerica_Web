<?php  

class Alquiler_pertiga_9cuerpos extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_pertiga_9cuerpos/index');
	}
}

?>