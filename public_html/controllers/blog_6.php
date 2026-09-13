<?php

class blog_6 extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->render('blog_6/index');
    }
}
