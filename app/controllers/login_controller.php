<?php

require_once("app/core/controller.php");

class Registration_controller extends Controller{

    function defaultPage(){
        $this->view->render("login.php");
    }
    

    //выполняет вход в существующий акк
    //выводит сообщение об удачном / неудачном входе
    function login(){
        
        require("app/models/account_model.php");
        $this->model = new Account_model();

        $this->model->login();
        
        header("Location: /main/");
        exit();

    }

}
