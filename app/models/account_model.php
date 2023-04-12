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
            $this->account = $newAccount;
            return true;
        }

        return false;

    }


    //вход в существующий акк
    //возвращает true в случае удачного входа
    function login(){

        $acc = Account::findByEmailPassword($_POST["email"], md5($_POST["password"]));

        if (is_null($acc))
            return false;

        $this->account = $acc;
        $_SESSION["accName"] = $this->getName();
        $_SESSION["accId"] = $this->getId();
        
        // setcookie("accountId", $this->getId(), (time() + 31100000), "/", "it-planet");  // срок действия - 1 year

        return true;

    }

    //ищет текущий акк
    function getMyAccount(){
        if (!isset($_SESSION["accId"])) return null;
        // echo "before finding ".json_encode($this->account)."\n";
        $this->account = Account::findById($_SESSION["accId"]);
        // echo "after finding ".json_encode($this->account)."\n";
    }


    function updateAccount(){
        // echo json_encode($this->account)." end\n";

        if (!empty($_POST["personFIO"])) $this->account->name = $_POST["personFIO"];
        if (!empty($_POST["dateAge"])) $this->account->birth = $_POST["dateAge"];
        if (!empty($_POST["personProblem"])) $this->account->problem = $_POST["personProblem"];
        // $this->account->height = $_POST["personHight"] ?? $this->account->name;
        // $this->account->weight = $_POST["personWeight"] ?? $this->account->name;

        $this->account->update();
        $_SESSION["accName"] = $this->getName();
        // echo json_encode($this->account);
    }

    function getId(){
        return $this->account->id;
    }

    function getName(){
        return $this->account->name ?? null;
    }

    function getBirth(){
        return $this->account->birth;
    }

    function getProblem(){
        return $this->account->problem;
    }

    function getHeight(){
        
    }

    function getWeight(){

    }

}