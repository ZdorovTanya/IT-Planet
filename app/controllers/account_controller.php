<?php

require_once("app/core/controller.php");

class Account_controller extends Controller{

    function defaultPage(){
        require_once("app/models/account_model.php");
        include("app/views/account.php");
    }

}
