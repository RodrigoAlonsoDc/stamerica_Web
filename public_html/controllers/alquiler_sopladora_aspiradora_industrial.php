<?php  

class Alquiler_sopladora_aspiradora_industrial extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_sopladora_aspiradora_industrial/index');
	}
}

?>