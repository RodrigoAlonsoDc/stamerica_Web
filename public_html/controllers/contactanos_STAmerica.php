<?php  

class Contactanos_STAmerica extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('contactanos_STAmerica/index');
	}
}

?>