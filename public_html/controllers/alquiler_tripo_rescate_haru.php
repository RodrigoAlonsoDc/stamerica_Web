<?php  

class Alquiler_tripo_rescate_haru extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_tripo_rescate_haru/index');
	}
}

?>