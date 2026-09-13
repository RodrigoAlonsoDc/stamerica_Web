<?php  

class Alquiler_rotomartillo_dewalt extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_rotomartillo_dewalt/index');
	}
}

?>