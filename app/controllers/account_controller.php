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

        $this->model->findArticleByAccount($this->model->getId());

        $this->view->render("account.php", $this->model);
    }


    function change(){

        $this->model->updateAccount();
        $this->model->getMyAccount();

        header("location: /account/");
        exit();

    }

    function logout(){
        $this->model->logout();
        
        header("Location: /main/");
        exit();
    }


    function showId($id){
        if (($_SESSION["accId"] ?? -1) == $id){
            $this->defaultPage();
            return;
        }

        $this->model->getAccountById($id);
        $this->view->render("account.php", $this->model);
    }

    function setSubscribe(){

        if ($this->model->checkSubscribe($_POST["subs"]))
            $this->model->delSubscribe($_POST["subs"]);
        else
            $this->model->setSubscribe($_POST["subs"]);
        
        header("Location: /account/".$_POST["subs"]);

    }

}
