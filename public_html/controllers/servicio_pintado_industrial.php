<?php  

class Servicio_pintado_industrial extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('servicio_pintado_industrial/index');
	}
}

?>