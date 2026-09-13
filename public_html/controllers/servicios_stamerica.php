<?php  

class Servicios_stamerica extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('servicios_stamerica/index');
	}
}

?>