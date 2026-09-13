<?php

class Blog_informativo extends Controller{

    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('blog_informativo/index');
    }

}

?>