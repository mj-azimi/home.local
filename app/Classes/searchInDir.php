<?php

namespace App\Classes;

class searchInDir{

    public function search(){
        $searsh = scandir(HOME_DIR);
        unset($searsh[0]);
        unset($searsh[1]);
        $searsh = array_values($searsh);
        return $searsh;
    }
}