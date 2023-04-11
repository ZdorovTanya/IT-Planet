<?php

require_once("app/core/controller.php");

class Main_controller extends Controller{


    //открывает страницу по умолчанию - index.html
    function defaultPage(){
        echo $_SESSION["accName"];
        
        $this->view->render("index.php", $this->model);

    }


    //выполняет регистрацию нового акк
    function register(){

        require("app/models/account_model.php");
        $this->model = new Account_model();

        $this->model->registration();
        $this->model->login();

        header("Location: /main/");
        exit();

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