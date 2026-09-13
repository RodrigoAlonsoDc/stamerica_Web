
<?php  

class Servicio_diseno_construccion_subestaciones_electricas extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('servicio_diseno_construccion_subestaciones_electricas/index');
	}
}

?>