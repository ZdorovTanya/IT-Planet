<?php

require_once("app/core/controller.php");

class Test_controller extends Controller{

    function defaultPage(){
        
        $this->view->render("test.php");
    }
}
