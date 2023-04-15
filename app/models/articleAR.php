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


    function __construct($subject = null, $title = null, $text = null){
        $this->subject = $subject;
        $this->title = $title;
        $this->text = $text;
    }

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

        //не названия а числа-ссылки (ключи) на другую, новую таблицу, точно

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

    function save(){
        static::createConnect();

        $stmt = static::$pdo->prepare("INSERT INTO `articles`(`id`, `subject`, `title`, `text`, `date`, `author`) VALUES (NULL, :subject, :title, :text, CURRENT_TIMESTAMP, :authorId)");

        $authorId = $_SESSION["accId"] ?? null;
        
        $stmt->bindParam("subject", $this->subject);
        $stmt->bindParam("title", $this->title);
        $stmt->bindParam("text", $this->text);
        $stmt->bindParam("authorId", $authorId);

        $stmt->execute();

    }


}
