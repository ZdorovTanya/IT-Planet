<?php

require_once("app/core/controller.php");

class Forum_controller extends Controller{

    function defaultPage(){
        $this->view->render("forum.php");
    }
}