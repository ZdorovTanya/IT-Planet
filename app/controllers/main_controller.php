<?php

require_once("app/core/controller.php");

class Main_controller extends Controller{


    //открывает страницу по умолчанию - index.html
    function defaultPage(){
        
        $this->view->render("main.php", $this->model);

    }

}
