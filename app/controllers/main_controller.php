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

        ($this->model->registration());
        header("Location: /main/");
        exit();
        //     echo "registration done";
        // else echo "errors wit registration";

    }


    //выполняет вход в существующий акк
    //выводит сообщение об удачном / неудачном входе
    function login(){

        require("app/models/account_model.php");
        $model = new Account_model();

        ($model->login());
        $this->defaultPage();
        header("Location: /main/");
        exit();
            // setcookie("accountId", $model->getId());
        //     echo "login";
        // } else echo "error wit login";

    }

    function getName(){
        $this->model->getAccountName();    
    }
}