<?php 

class nosotros_stamerica extends Controller{

    function __construct(){
        parent::__construct();
        // echo "<p>Nueva Controlador Nosotros_STAmerica<p>";
    }

    function render(){
        $this->view->render('nosotros_STAmerica/index');
    }
}

?>