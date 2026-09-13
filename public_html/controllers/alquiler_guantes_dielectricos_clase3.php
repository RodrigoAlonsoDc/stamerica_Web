<?php  

class Alquiler_guantes_dielectricos_clase3 extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_guantes_dielectricos_clase3/index');
	}
}

?>