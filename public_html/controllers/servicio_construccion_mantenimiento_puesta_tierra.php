
<?php  

class Servicio_construccion_mantenimiento_puesta_tierra extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('servicio_construccion_mantenimiento_puesta_tierra/index');
	}
}

?>

 