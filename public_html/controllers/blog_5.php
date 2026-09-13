<?php

class blog_5 extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->render('blog_5/index');
    }
}
