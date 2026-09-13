<?php  

class Alquiler_careta_seguridad_arco_electrico_27cal extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_careta_seguridad_arco_electrico_27cal/index');
	}
}

?>