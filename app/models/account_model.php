<?php

require_once("app/models/accountAR.php");

class Account_model{
    static private $account;


    //регистрация нового пользователя
    //возвращает true в случае удачной регистрации
    //ищет акк с такими же почтой и паролем, возвращает false если находит
    function registration(){

        static::$account = new Account($_POST["name"], $_POST["birth"], $_POST["sex"], $_POST["goal"], $_POST["problem"], $_POST["email"], $_POST["password"]);
        
        if (is_null(static::$account->findByEmailPassword($_POST["email"], md5($_POST["password"])))){
            static::$account->save();
            return true;
        }

        return false;

    }


    //вход в существующий акк
    //возвращает true в случае удачного входа
    function login(){

        static::$account = new Account();
        static::$account = static::$account->findByEmailPassword($_POST["email"], md5($_POST["password"]));

        if (is_null(static::$account))
            return false;

        setcookie("accountId", $this->getId(), (time() + 31100000), "/", "it-planet");  // срок действия - 1 year
        // echo json_encode(static::$account);

        return true;

    }

    //возвращает имя пользователя или null если такого нет
    static function getAccountName(){
        static::$account = new Account();
        if (!isset($_COOKIE["accountId"])) return null;
        return static::$account->findNameById($_COOKIE["accountId"]);
    }

    function getName(){
        return static::$account->name;
    }

    function getId(){
        return static::$account->id;
    }
}