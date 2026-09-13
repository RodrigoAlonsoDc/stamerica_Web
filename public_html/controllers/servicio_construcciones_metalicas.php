
<?php  

class Servicio_construcciones_metalicas extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('servicio_construcciones_metalicas/index');
	}
}

?>