<?php

class politicas_privacidad extends Controller
{

    function __construct()
    {
        parent::__construct();
        // echo "<p>Nueva Controlador Principal<p>";
    }

    function render()
    {
        $this->view->render('politicas_privacidad/index');
    }
}
