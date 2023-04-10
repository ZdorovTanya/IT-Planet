<?php

class Account_model{
    static private $table = "accounts";


    //регистрация нового пользователя
    //ничего не возвращает
    function registration(){
        $pdo = new PDO("mysql:host=localhost;dbname=eatNormal", "root", "123");
        
        $stmt = $pdo->prepare("INSERT INTO `accounts` (`id`, `name`, `birth`, `sex`, `goal`, `problem`, `email`, `password`) VALUES (NULL, :name, :birth, :sex, :goal, :problem, :email, :password)");
        
        $stmt->bindParam(":name", $_POST["name"]);
        $stmt->bindParam(":birth", $_POST["birth"]);
        $stmt->bindParam(":sex", $_POST["sex"]);
        $stmt->bindParam(":goal", $_POST["goal"]);
        $stmt->bindParam(":problem", $_POST["problem"]);
        $stmt->bindParam(":email", $_POST["email"]);
        $stmt->bindParam(":password", $_POST["password"]);

        $stmt->execute();

    }


    //вход в существующий акк
    //возвращает кол-во подходящих строк
    function login(){
        $pdo = new PDO("mysql:host=localhost;dbname=eatNormal", "root", "123");

        $stmt = $pdo->prepare("SELECT `name` FROM `accounts` WHERE `email`=:email AND `password`=:password");

        $stmt->bindParam(":email",  $_POST["email"]);
        $stmt->bindParam(":password", $_POST["password"]);

        $stmt->execute();

        return $stmt->rowCount();

    }
}