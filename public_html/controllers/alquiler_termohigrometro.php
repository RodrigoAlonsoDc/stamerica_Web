<?php  

class Alquiler_termohigrometro extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_termohigrometro/index');
	}
}

?>