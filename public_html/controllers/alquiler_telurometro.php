<?php  

class Alquiler_telurometro extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_telurometro/index');
	}
}

?>