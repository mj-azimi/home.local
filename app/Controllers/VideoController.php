<?php

namespace App\Controllers;

use Illuminate\Support\Facades\Request;

class VideoController{
    public function play(){
    

        $video = $_SERVER['HTTP_REFERER'].'/home/'.$_GET['name'];
        view('video',compact('video'));
    }
}