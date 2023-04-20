<?php

class View{

    //отображение контента
    function render($content, $model=null){
        
        require_once("app/views/".$content);

    }
}
