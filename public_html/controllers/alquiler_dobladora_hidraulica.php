<?php  

class Alquiler_dobladora_hidraulica extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_dobladora_hidraulica/index');
	}
}

?>