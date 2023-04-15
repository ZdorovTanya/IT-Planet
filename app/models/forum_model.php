<?php

require_once("app/models/articleAR.php");

class Forum_model{

    private $articles = [];


    function findArticleById($id){
        $this->articles[] = Article::getArticleById($id);
    }


    function findArticlesByFilters($FiltersArray){
        if (is_null($FiltersArray)){
            return;
        }
    }

    function findAll($filtersArray){
        if (empty($filtersArray))
            $this->articles = Article::getAll();
        else
            $this->articles = Article::getBySubjects($filtersArray);
        return $this->articles;
    }

    function createNewArticle(){

        $newArticle = new Article($_POST["subject"], $_POST["title"], $_POST["maintext"]);
        $newArticle->save();
    }

    function getSubject($id){
        return $this->articles[$id-1]->subject;
    }

    function getTitle($id){
        return $this->articles[$id-1]->title;
    }

    function getText($id){
        return $this->articles[$id-1]->text;
    }

    function getDate($id){
        return $this->articles[$id-1]->date;
    }

    function getAuthor($id){
        return $this->articles[$id-1]->author;
    }
}
