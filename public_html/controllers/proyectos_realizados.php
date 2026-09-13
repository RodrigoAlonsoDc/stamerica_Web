<?php

class Proyectos_realizados extends Controller{

    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('proyectos_realizados/index');
    }
}

?>