<?php

namespace App\Controllers;

use App\Classes\searchInDir;

class DashboardController{


    public function index(){
        $searchInDir =new searchInDir();
        $search = $searchInDir->search();


        return view('index',compact('search'));
    }

}