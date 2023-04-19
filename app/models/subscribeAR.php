<?php

require_once("app/core/basicAR.php");

class Subscribe extends basicAR{
    static private $table = "accounts";
    public $id;
    public $author_id;
    public $follower_id;

    static function addSubscribe($author, $follower){
        static::createConnect();

        $stmt = static::$pdo->prepare("INSERT INTO `subscriptions` (`id`, `author_id`, `follower_id`) VALUES (NULL, :author, :follower)");
        $stmt->bindParam("author", $author);
        $stmt->bindParam("follower", $follower);

        $stmt->execute();
    }


    static function delSubscribe($author, $follower){
        static::createConnect();

        $stmt = static::$pdo->prepare("DELETE FROM `subscriptions` WHERE `author_id`=:author AND `follower_id`=:follower");
        $stmt->bindParam("author", $author);
        $stmt->bindParam("follower", $follower);

        $stmt->execute();
    }

    static function checkSubscribe($author, $follower){
        static::createConnect();

        $stmt = static::$pdo->prepare("SELECT * FROM `subscriptions` WHERE `author_id`=:author AND `follower_id`=:follower");
        $stmt->bindParam("author", $author);
        $stmt->bindParam("follower", $follower);

        $stmt->execute();

        return $stmt->rowCount() >= 1;
    }

    static function getSubscribe($follower){
        static::createConnect();

        $stmt = static::$pdo->prepare("SELECT `author_id` FROM `subscriptions` WHERE `follower_id`=:follower");
        $stmt->bindParam("follower", $follower);

        $stmt->execute();
        $res =[];

        while($sub = $stmt->fetch())
            $res[] = $sub["author_id"];
        
        return $res;
    }


    

}