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
    public $authorId;


    //конструктор ??пераметры??
    function __construct($subject = null, $title = null, $text = null){
        $this->subject = $subject;
        $this->title = $title;
        $this->text = $text;
    }


    //получение всех статей
    static function getAll(){

        static::createConnect();

        $stmt = static::$pdo->prepare("SELECT * FROM `articles`");

        $stmt->execute();
        $objs = [];

        while ($res = $stmt->fetch()){
            $objs[] = static::ceateArticle($res);
        }

        return $objs;
    }


    //создание объекта из данных
    static private function ceateArticle($data){

        if (is_null($data))
            return null;

        $obj = new Article();

        foreach ($obj as $key=>$value){
            $obj->$key = $data[$key] ?? null;
        }
    
        $stmt2 = static::$pdo->prepare("SELECT `name` FROM `types_disorder` WHERE `id` IN (SELECT `id_type` FROM `articles_types_dis` WHERE `id_article`=:id)");
        $stmt2->bindParam("id", $obj->id);
        $stmt2->execute();

        while($subj = $stmt2->fetch())
            $obj->subject[] = $subj;

        $obj->author = Account::findNameById($obj->authorId);

        return $obj;

    }

    
    //поиск статей по фильтрам тем
    static function getBySubjects($subjArr){
        
        static::createConnect();

        $stmt = static::$pdo->prepare("SELECT * FROM `articles` WHERE `id` IN (SELECT `id_article` FROM `articles_types_dis` WHERE `id_type`=:subj0 OR `id_type`=:subj1 OR `id_type`=:subj2 OR `id_type`=:subj3 OR `id_type`=:subj4)");

        $stmt->bindParam("subj0", $subjArr["anorexia"]);
        $stmt->bindParam("subj1", $subjArr["bulimia"]);
        $stmt->bindParam("subj2", $subjArr["orthorexia"]);
        $stmt->bindParam("subj3", $subjArr["overeating"]);
        $stmt->bindParam("subj4", $subjArr["other"]);

        $stmt->execute();
        $objs = [];

        while ($res = $stmt->fetch()){
            $objs[] = static::ceateArticle($res);
        }

        return $objs;
    }


    //сохранение объекта в бд
    function save(){
        static::createConnect();

        $stmt = static::$pdo->prepare("INSERT INTO `articles`(`id`, `title`, `text`, `date`, `author`) VALUES (NULL, :title, :text, CURRENT_TIMESTAMP, :authorId)");

        $authorId = $_SESSION["accId"] ?? null;
        
        $stmt->bindParam("title", $this->title);
        $stmt->bindParam("text", $this->text);
        $stmt->bindParam("authorId", $authorId);

        $stmt->execute();
        $this->id = static::$pdo->lastInsertId();

        $stmt2 = static::$pdo->prepare("INSERT INTO `articles_types_dis` (`id`, `id_article`, `id_type`) VALUES (NULL, :article, :type)");

        foreach($this->subject as $subj){
            $stmt2->bindParam("article", $this->id);
            $stmt2->bindParam("type", $subj);
            $stmt2->execute();
        }         

    }


    static function getArticleByAccount($accId){

        $stmt = static::$pdo->prepare("SELECT * FROM `articles` WHERE `authorId`=:accid");
        $stmt->bindParam("accid", $accId);
        $stmt->execute();

        $objs = [];
        for($i=0; $i<3; $i++)
            $objs[] = static::ceateArticle($stmt->fetch() ?? null);

        return $objs;
    }


    //геттеры

    function getArraySubjects(){
        $res = [];
        foreach($this->subject as $subj)
            $res[] = $subj["name"];

        return $res;
    }

    function getStringSubjects(){
        $res = "";
        foreach($this->subject as $subj)
            $res .= $subj["name"]." ";

        return $res;
    }

    function getTitle(){
        return $this->title;
    }

    function getText(){
        return $this->text;
    }

    function getAuthor(){
        return $this->author;
    }

    function getAuthorId(){
        return $this->authorId;
    }

    function getDate(){
        return $this->date;
    }


}
