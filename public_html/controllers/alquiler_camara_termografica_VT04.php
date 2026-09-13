<?php  

class Alquiler_camara_termografica_VT04 extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_camara_termografica_VT04/index');
	}
}

?>