<?php  

class Servicio_tratamiento_aceite_dielectrico extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('servicio_tratamiento_aceite_dielectrico/index');
	}
}

?>