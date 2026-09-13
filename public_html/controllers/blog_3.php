<?php

class blog_3 extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->render('blog_3/index');
    }
}
