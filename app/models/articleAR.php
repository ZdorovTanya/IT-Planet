<?php

require_once("app/core/basicAR.php");

class Article extends basicAR{
    static private $table = "articles";
    static private $pdo;
    public $id;
    public $title;
    public $text;
    public $date;
    public $author;

    static function getArticleById($id){

        static::createConnect();

        $stmt = static::$pdo->prepare("SELECT * FROM `articles` WHERE `id`=:id");
        $stmt->bindParam("id", $id);

        $stmt->execute();

        $obj = new Article();

        foreach ($obj as $key=>$value)
            $obj->$key = $stmt[$key];

        return $obj;

    }

    
}
