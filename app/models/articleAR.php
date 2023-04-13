<?php

require_once("app/core/basicAR.php");
require_once("app/models/accountAR.php");

class Article extends basicAR{
    static private $table = "articles";
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
        $stmt = $stmt->fetch();

        $obj = new Article();

        foreach ($obj as $key=>$value)
            $obj->$key = $stmt[$key];
        
        $obj->author = Account::findNameById($obj->author);

        return $obj;

    }


}
