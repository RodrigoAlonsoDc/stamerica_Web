<?php  

class Alquiler_prensa_terminal_hidraulica extends Controller{

	function __construct(){
		parent::__construct();
		// echo "<p>Nueva Controlador Principal<p>";
	}

	function render(){
		$this->view->render('alquiler_prensa_terminal_hidraulica/index');
	}
}

?>