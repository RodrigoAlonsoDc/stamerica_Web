<?php  

class Alquiler_traje_arco_electrico extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_traje_arco_electrico/index');
	}
}

?>