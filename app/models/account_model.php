<?php

require_once("app/models/accountAR.php");

class Account_model{
    static public $account;


    //регистрация нового пользователя
    //возвращает true в случае удачной регистрации
    //ищет акк с такими же почтой и паролем, возвращает false если находит
    function registration(){

        $newAccount = new Account($_POST["name"], $_POST["birth"], $_POST["sex"], $_POST["goal"], $_POST["problem"], $_POST["email"], $_POST["password"]);
        
        if (is_null(Account::findByEmailPassword($_POST["email"], md5($_POST["password"])))){
            $newAccount->save();
            static::$account = $newAccount;
            return true;
        }

        return false;

    }


    //вход в существующий акк
    //возвращает true в случае удачного входа
    function login(){

        // static::$account = new Account();
        $acc = Account::findByEmailPassword($_POST["email"], md5($_POST["password"]));

        if (is_null($acc))
            return false;

        // $this->getMyAccount();
        static::$account = $acc;
        header("accountName: ".$this->getName());
        
        setcookie("accountId", $this->getId(), (time() + 31100000), "/", "it-planet");  // срок действия - 1 year

        return true;

    }

    //возвращает имя пользователя или null если такого нет
    function getAccountName(){
        // if (!isset($_COOKIE["accountId"])) return null;
        // static::$account = Account::findById($_COOKIE["accountId"]);
        // return $this->getName();
    }

    //ищет текущий акк
    function getMyAccount(){
        if (!isset($_COOKIE["accountId"])) return null;
        static::$account = Account::findById($_COOKIE["accountId"]);
    }

    function getId(){
        return static::$account->id;
    }

    function getName(){
        return static::$account->name ?? null;
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