<?php

class View{

    function render($content, $model=null){
        include("app/views/".$content);
    }
}