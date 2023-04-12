<?php

require_once("app/core/controller.php");

class Account_controller extends Controller{


    function __construct(){

        parent::__construct();

        require_once("app/models/account_model.php");

        $this->model = new Account_model;
        $this->model->getMyAccount();

    }


    function defaultPage(){

        $this->view->render("account.php", $this->model);
    }


    function change(){

        $this->model->updateAccount();
        $this->model->getMyAccount();

        header("location: /account/");
        exit();

    }

}
