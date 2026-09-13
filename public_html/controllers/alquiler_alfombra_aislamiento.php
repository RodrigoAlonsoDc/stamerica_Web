<?php  

class Alquiler_alfombra_aislamiento extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_alfombra_aislamiento/index');
	}
}

?>