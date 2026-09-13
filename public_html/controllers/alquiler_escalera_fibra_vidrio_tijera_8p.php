<?php  

class Alquiler_escalera_fibra_vidrio_tijera_8p extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_escalera_fibra_vidrio_tijera_8p/index');
	}
}

?>