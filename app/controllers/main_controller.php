<?php

class Main_controller{


    //открывает страницу по умолчанию - index.html
    function defaultPage(){

        include("app/views/index.html");

    }


    //выполняет регистрацию нового акк
    function register(){

        require("app/models/account_model.php");
        $model = new Account_model();

        $model->registration();

    }


    //выполняет вход в существующий акк
    //выводит сообщение об удачном / неудачном входе
    function login(){

        require("app/models/account_model.php");
        $model = new Account_model();

        if ($model->login() == 1){
            echo "login";
        } else echo "error wit login";

    }
}