
<?php  

class Servicio_analisis_pruebas_electricas extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('servicio_analisis_pruebas_electricas/index');
	}
}

?>

 

