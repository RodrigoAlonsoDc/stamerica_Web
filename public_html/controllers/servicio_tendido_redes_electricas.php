<?php  

class Servicio_tendido_redes_electricas extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('servicio_tendido_redes_electricas/index');
	}
}

?>