<?php

class View{

    function render($content, $model=null){
        
        require_once("app/views/".$content);

    }
}