
<?php  

class Servicio_construccion_drywall extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('servicio_construccion_drywall/index');
	}
}

?>

 
