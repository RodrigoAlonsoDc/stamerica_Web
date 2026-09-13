<?php  

class Alquiler_arnes_completo extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_arnes_completo/index');
	}
}

?>