<?php

require_once("app/core/controller.php");

class Selfhelp_controller extends Controller{

    function defaultPage(){
        $this->view->render("self-help.php");
    }
    

}
