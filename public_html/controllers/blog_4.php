<?php

class blog_4 extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->render('blog_4/index');
    }
}
