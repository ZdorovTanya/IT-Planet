<?php

require_once("app/models/accountAR.php");

class Account_model{
    static public $account;
    public $articles;


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


    //выход из аккаунта
    function logout(){

        unset($this->account);
        unset($_SESSION["accName"]);
        unset($_SESSION["accId"]);
        
    }

    //ищет текущий акк
    function getMyAccount(){
        if (!isset($_SESSION["accId"])) return null;
        $this->account = Account::findById($_SESSION["accId"]);
    }


    function getAccountById($accId){
        $this->account = Account::findById($accId);
    }


    function updateAccount(){

        if (!empty($_POST["personFIO"])) $this->account->name = $_POST["personFIO"];
        if (!empty($_POST["dateAge"])) $this->account->birth = $_POST["dateAge"];
        if (!empty($_POST["personProblem"])) $this->account->problem = $_POST["personProblem"];
        if (!empty($_POST["personHight"])) $this->account->height = $_POST["personHight"];
        if (!empty($_POST["personWeight"])) $this->account->weight = $_POST["personWeight"];
        if (!empty($_POST["personHistory"])) $this->account->about = $_POST["personHistory"];

        $this->account->update();
        $_SESSION["accName"] = $this->getName();
    }


    function findArticleByAccount($accId){

        require_once("app/models/articleAR.php");
        $this->articles = Article::getArticleByAccount($accId);
    }


    function setSubscribe($id){
        require_once("app/models/subscribeAR.php");
        Subscribe::addSubscribe($id, $this->getId());
    }

    function delSubscribe($id){
        require_once("app/models/subscribeAR.php");
        Subscribe::delSubscribe($id, $this->getId());
    }

    function checkSubscribe($author_id, $follower_id = null){
        $follower_id = $follower_id ?? $_SESSION["accId"];
        require_once("app/models/subscribeAR.php");
        return Subscribe::checkSubscribe($author_id, $follower_id);
    }

    function getSubscribes($id = null){
        $id = $id ?? $_SESSION["accId"];
        require_once("app/models/subscribeAR.php");
        return Subscribe::getSubscribe($id);
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
        return $this->account->height;
    }

    function getWeight(){
        return $this->account->weight;
    }

    function getAbout(){
        return $this->account->about;
    }

}