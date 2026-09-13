<?php  

class Alquiler_roscadora_tubos extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_roscadora_tubos/index');
	}
}

?>