<?php  

class Alquiler_hidrolavadora_electrica extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_hidrolavadora_electrica/index');
	}
}

?>