<?php

class Router{
    static function start(){
        
        $controller = null;
        $id = null;

        //если адрес некорректный - переводит на главную
        if (!isset($_REQUEST["controller"])){
            header("Location: /main/");
            exit();
        }
        
        //подключение соотв контроллера
        $controller_name = $_REQUEST["controller"]."_controller";
        require_once("app/controllers/".$controller_name.".php");

        //создание соотв класса
        $controller_name = str_replace("-", "", $controller_name);
        $controller_name = ucfirst($controller_name);
        $controller = new $controller_name;

        //действие на страницей, есди ничего - вывод стр по умолчанию
        $action = $_REQUEST["action"] === "" ? null : $_REQUEST["action"];
        if (is_numeric($action)){
            $id = $action;
            $action = "showId";
        }
        
        //выполнение действия
        if (!is_null($controller) && is_null($action)) $controller->defaultPage();
        elseif (!is_null($controller) && !is_null($action)) $controller->$action($id);
        else {
            header("Location: /main/");
            exit();
        }
    }
}
