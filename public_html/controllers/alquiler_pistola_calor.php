<?php  

class Alquiler_pistola_calor extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_pistola_calor/index');
	}
}

?>