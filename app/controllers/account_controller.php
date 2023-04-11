<?php

require_once("app/core/controller.php");

class Account_controller extends Controller{

    function defaultPage(){

        require_once("app/models/account_model.php");

        $this->model = new Account_model;
        $this->model->getMyAccount();

        $this->view->render("account.php", $this->model);
    }

}
