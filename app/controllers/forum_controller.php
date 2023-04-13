<?php

require_once("app/core/controller.php");
require_once("app/models/forum_model.php");

class Forum_controller extends Controller{

    function defaultPage(){

        $this->model = new Forum_model();
        $this->model->findArticleById(1);
        $this->view->render("forum.php", $this->model);
    }
}