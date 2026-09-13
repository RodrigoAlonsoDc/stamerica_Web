<?php

class blog_1 extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->render('blog_1/index');
    }
}
