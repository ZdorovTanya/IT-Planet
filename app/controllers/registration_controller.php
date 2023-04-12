<?php

require_once("app/core/controller.php");

class Registration_controller extends Controller{

    function defaultPage(){
        $this->view->render("registration.php");
    }
}
