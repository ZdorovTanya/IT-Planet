<?php

require_once("app/core/controller.php");
require_once("app/core/view.php");

class Main_controller extends Controller{

    function __construct(){
        parent::__construct();
        require("app/models/account_model.php");
        $this->model = new Account_model();
    }


    //открывает страницу по умолчанию - index.html
    function defaultPage(){

        $this->model->getMyAccount();
        
        $this->view->render("index.php", $this->model);

    }


    //выполняет регистрацию нового акк
    function register(){

        $this->model->registration();
        $this->model->login();

        header("Location: /main/");
        exit();

    }


    //выполняет вход в существующий акк
    //выводит сообщение об удачном / неудачном входе
    function login(){

        $this->model->login();
        
        header("Location: /main/");
        exit();

    }

}