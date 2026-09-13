<?php  

class Alquiler_grupo_electrogeno_bauker extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_grupo_electrogeno_bauker/index');
	}
}

?>