<?php

require_once("app/core/controller.php");
require_once("app/models/forum_model.php");

class Forum_controller extends Controller{

    function defaultPage(){

        $this->model = new Forum_model();
        $this->view->render("forum.php", $this->model);
    }

    function writeSubject(){
        $this->view->render("writeSubj.php", $this->model);
    }

    function saveSubj(){
        $this->model = new Forum_model();
        $this->model->createNewArticle();
        header("Location: /forum/");

    }

}