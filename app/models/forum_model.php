<?php

require_once("app/models/articleAR.php");

class Forum_model{

    private $articles = [];

    function getArticle(){

    }

    function findArticleById($id){
        $this->articles[] = Article::getArticleById($id);
        
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
