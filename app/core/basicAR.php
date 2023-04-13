<?php

class basicAR{
    
    static private $table;
    static public $pdo;

    
    //создание подключения к бд
    static function createConnect(){
        if (!static::$pdo)
            try{
                static::$pdo = new PDO("mysql:host=localhost;dbname=eatNormal", "root", "123");
            } catch (PDOException $ex){
                static::$pdo = new PDO("mysql:host=localhost;dbname=eatNormal", "root");
            }
    }

}