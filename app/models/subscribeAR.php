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

}