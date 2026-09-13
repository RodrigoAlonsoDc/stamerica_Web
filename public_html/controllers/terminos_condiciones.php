<?php

class terminos_condiciones extends Controller
{

    function __construct()
    {
        parent::__construct();
        // echo "<p>Nueva Controlador Principal<p>";
    }

    function render()
    {
        $this->view->render('terminos_condiciones/index');
    }
}
