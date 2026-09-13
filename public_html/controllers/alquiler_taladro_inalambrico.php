<?php  

class Alquiler_taladro_inalambrico extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_taladro_inalambrico/index');
	}
}

?>