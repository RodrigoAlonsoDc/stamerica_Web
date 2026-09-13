<?php  

class Alquiler_revelador_tension extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_revelador_tension/index');
	}
}

?>