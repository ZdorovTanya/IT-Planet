<?php

class Main_controller{
    private $model;


    //открывает страницу по умолчанию - index.html
    function defaultPage(){

        require_once("app/models/account_model.php");
        include("app/views/index.php");

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

    function getName(){
        $this->model->getAccountName();    
    }
}