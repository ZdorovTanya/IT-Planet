<?php

require_once("app/models/articleAR.php");

class Forum_model{

    private $articles = [];


    //поиск всех записей, с учетом фильтров (если он есть)
    function findAll($filtersArray){
        if (empty($filtersArray))
            $this->articles = Article::getAll();
        else
            $this->articles = Article::getBySubjects($filtersArray);
        return $this->articles;
    }


    //создание новой записи
    function createNewArticle(){

        $newArticle = new Article($_POST["subjects"], $_POST["title"], $_POST["maintext"]);
        $newArticle->save();
    }

}
