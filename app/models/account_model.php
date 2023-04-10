<?php

class Account_model{
    static private $table = "accounts";

    function registration(){
        $pdo = new PDO("mysql:host=localhost;dbname=eatNormal", "root", "123");
        
        $stmt = $pdo->prepare("INSERT INTO `accounts` (`id`, `name`, `birth`, `sex`, `goal`, `problem`, `email`, `password`) VALUES (NULL, ':name', ':birth', ':sex', ':goal', ':problem', ':email', ':pass')");

        // $name = $_POST["name"];
        // $sex = ($_POST["sex"] == "men")? "m":"w";
        $stmt->bindParam(":name", $_POST["name"]);
        $stmt->bindParam(":birth", $_POST["birth"]);
        $stmt->bindParam(":sex", $_POST["sex"]);
        $stmt->bindParam(":goal", $_POST["goal"]);
        $stmt->bindParam(":problem", $_POST["problem"]);
        $stmt->bindParam(":email", $_POST["email"]);
        $stmt->bindParam(":pass", $_POST["password"]);

        echo json_encode($_POST);

        $stmt->execute();

    }
}