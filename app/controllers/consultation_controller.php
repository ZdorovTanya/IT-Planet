<?php

require_once("app/core/controller.php");

class Consultation_controller extends Controller{

    function defaultPage(){
        
        $this->view->render("consultation.php");
    }
}
