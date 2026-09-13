<?php  

class Alquiler_tripode_ridgid extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_tripode_ridgid/index');
	}
}

?>