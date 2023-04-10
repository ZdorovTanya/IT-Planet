<?php

class Router{
    static function start(){
        
        $controller = null;

        if (!isset($_REQUEST["controller"])){
            header("Location: /main/");
            exit();
        }
        
        $controller_name = $_REQUEST["controller"]."_controller";
        require_once("app/controllers/".$controller_name.".php");

        $controller_name = ucfirst($controller_name);
        $controller = new $controller_name;

        $action = $_REQUEST["action"] === "" ? null : $_REQUEST["action"];
        
        if (!is_null($controller) && is_null($action)) $controller->defaultPage();
        elseif (!is_null($controller) && !is_null($action)) $controller->$action();
        else {
            header("Location: /main/");
            exit();
        }
    }
}