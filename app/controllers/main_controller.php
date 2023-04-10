<?php

class Main_controller{

    function defaultPage(){

        include("app/views/index.html");

    }

    function register(){

        require("app/models/account_model.php");
        $model = new Account_model();

        $model->registration();

    }
}