<?php

require_once("app/core/controller.php");

class Login_controller extends Controller{

    function defaultPage(){
        $this->view->render("login.php");
    }
    

    //выполняет вход в существующий акк
    function login(){
        
        require("app/models/account_model.php");
        $this->model = new Account_model();

        $this->model->login();
        
        header("Location: /main/");
        exit();

    }

}
