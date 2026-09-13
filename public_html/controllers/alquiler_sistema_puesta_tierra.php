<?php  

class Alquiler_sistema_puesta_tierra extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_sistema_puesta_tierra/index');
	}
}

?>