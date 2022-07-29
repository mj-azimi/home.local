<?php


function view($name,$vars = Null){

    if (!is_null($vars)) {
        extract($vars);
    }

    include __DIR__.'/../../views/'.$name.'.blade.php';
}