<?php

class Controller{

    public $model;
    public $view;

    function __construct(){
        require_once("app/core/view.php");
        $this->view = new View();
    }
}
