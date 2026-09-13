<?php  

class Alquiler_sierra_sable extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_sierra_sable/index');
	}
}

?>