<?php

require_once("app/models/accountAR.php");

class Account_model{
    static public $account;


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

        $this->getMyAccount();
        setcookie("accountId", $this->getId(), (time() + 31100000), "/", "it-planet");  // срок действия - 1 year

        return true;

    }

    //возвращает имя пользователя или null если такого нет
    function getAccountName(){
        if (!isset($_COOKIE["accountId"])) return null;
        static::$account = Account::findById($_COOKIE["accountId"]);
        return $this->getName();
    }

    //ищет текущий акк
    function getMyAccount(){
        static::$account = Account::findById($_COOKIE["accountId"]);
    }

    function getId(){
        return static::$account->id;
    }

    function getName(){
        return static::$account->name;
    }

    function getBirth(){
        return static::$account->birth;
    }

    function getProblem(){
        return static::$account->problem;
    }

    function getHeight(){
        
    }

    function getWeight(){

    }

}