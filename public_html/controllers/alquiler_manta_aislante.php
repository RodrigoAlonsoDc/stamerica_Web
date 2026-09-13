<?php  

class Alquiler_manta_aislante extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_manta_aislante/index');
	}
}

?>