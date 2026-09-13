<?php  

class Alquiler_dobladora_tubos_truper extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_dobladora_tubos_truper/index');
	}
}

?>