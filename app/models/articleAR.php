<?php

require_once("app/core/basicAR.php");
require_once("app/models/accountAR.php");

class Article extends basicAR{
    static private $table = "articles";
    public $id;
    public $subject;
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

    static function getAll(){

        static::createConnect();

        $stmt = static::$pdo->prepare("SELECT * FROM `articles`");

        $stmt->execute();
        $objs = [];

        while ($res = $stmt->fetch()){

            $obj = new Article();

            foreach ($obj as $key=>$value)
                $obj->$key = $res[$key];

            $obj->author = Account::findNameById($obj->author);

            $objs[] = $obj;
        }

        return $objs;
    }

    static function getBySubjects($subjArr){
        
        static::createConnect();

        $stmt = static::$pdo->prepare("SELECT * FROM `articles` WHERE `subject`=:subj0 OR `subject`=:subj1 OR `subject`=:subj2 OR `subject`=:subj3 OR `subject`=:subj4");

        //не названия а числа-ссылки (ключи) на другую, новую таблицу, видимо
        
        $stmt->bindParam("subj0", $subjArr["anorexia"]);
        $stmt->bindParam("subj1", $subjArr["bulimia"]);
        $stmt->bindParam("subj2", $subjArr["orthorexia"]);
        $stmt->bindParam("subj3", $subjArr["overeating"]);
        $stmt->bindParam("subj4", $subjArr["other"]);

        $stmt->execute();
        $objs = [];

        while ($res = $stmt->fetch()){

            $obj = new Article();

            foreach ($obj as $key=>$value)
                $obj->$key = $res[$key];

            $obj->author = Account::findNameById($obj->author);

            $objs[] = $obj;
        }

        return $objs;
    }


}
