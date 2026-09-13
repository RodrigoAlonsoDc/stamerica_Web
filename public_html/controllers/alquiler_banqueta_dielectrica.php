<?php  

class Alquiler_banqueta_dielectrica extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_banqueta_dielectrica/index');
	}
}

?>