<?php  

class Alquiler_portabobina_12tn extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_portabobina_12tn/index');
	}
}

?>