<?php

require_once("app/core/basicAR.php");

class Account extends basicAR{
    static private $table = "accounts";
    public $id;
    public $name;
    public $birth;
    public $sex;
    public $goal;
    public $problem;
    public $email;
    public $password;
    public $height;
    public $weight;
    public $about;



    //конструктор
    function __construct($name = null, $birth = null, $sex = null, $goal = null, $problem = null, $email = null, $password= null){

        $this->createConnect();
        
        $this->name = $name;
        $this->birth = $birth;
        $this->sex = $sex;
        $this->goal = $goal;
        $this->problem = $problem;
        $this->email = $email;
        $this->password = $password;

    }


    //сохранение пользователя
    function save(){

        $this->createConnect();

        $stmt = static::$pdo->prepare("INSERT INTO `accounts` (`id`, `name`, `birth`, `sex`, `goal`, `problem`, `email`, `password`) VALUES (NULL, :name, :birth, :sex, :goal, :problem, :email, :password)");
        
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":birth", $this->birth);
        $stmt->bindParam(":sex", $this->sex);
        $stmt->bindParam(":goal", $this->goal);
        $stmt->bindParam(":problem", $this->problem);
        $stmt->bindParam(":email", $this->email);
        
        $this->password = md5($this->password);
        $stmt->bindParam(":password", $this->password);

        $stmt->execute();
    }


    //обновление существующего акк
    function update(){

        $this->createConnect();
        
        $stmt = static::$pdo->prepare("UPDATE `accounts` SET `name`=:name,`birth`=:birth, `goal`=:goal,`problem`=:problem, `height`=:height, `weight`=:weight, `about`=:about WHERE id=$this->id");
        
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":birth", $this->birth);
        $stmt->bindParam(":goal", $this->goal);
        $stmt->bindParam(":problem", $this->problem);
        $stmt->bindParam(":height", $this->height);
        $stmt->bindParam(":weight", $this->weight);
        $stmt->bindParam(":about", $this->about);

        try{
            $stmt->execute();
        } catch (PDOException $e){};
    }


    //поиск по почте и паролю
    //возвращает объект пользователя (этого класса)
    static function findByEmailPassword($email, $password){

        static::createConnect();

        $stmt = static::$pdo->prepare("SELECT * FROM `accounts` WHERE `email`=:email AND `password`=:password");

        $stmt->bindParam(":email",  $email);
        $stmt->bindParam(":password", $password);

        $stmt->execute();

        if ($stmt->rowCount() != 1) return null;

        $obj = new Account();

        $stmt = $stmt->fetch();

        foreach ($stmt as $key=>$value)
            $obj->$key = $value;

        return $obj;
    }


    //поиск имени по id
    //возвращает имя пользователя
    static function findNameById($id){

        static::createConnect();

        $stmt = static::$pdo->prepare("SELECT `name` FROM `accounts` WHERE `id`=:id");

        $stmt->bindParam(":id",  $id);

        $stmt->execute();
        $stmt = $stmt->fetch();

        return $stmt["name"] ?? "eatNormal";
    }

    //поиск акк по id
    //возвращает объект
    static function findById($id){

        static::createConnect();

        $stmt = static::$pdo->prepare("SELECT * FROM `accounts` WHERE `id`=:id");

        $stmt->bindParam(":id",  $id);

        $stmt->execute();
        if ($stmt->rowCount() != 1) return null;

        $obj = new Account();

        $stmt = $stmt->fetch();


        foreach ($obj as $key=>$value)
            $obj->$key = $stmt[$key];

        return $obj;
    }
}
