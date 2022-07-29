<?php

use App\Controllers\DashboardController;
use App\Controllers\VideoController;

Route::get('/',new DashboardController(),'index');


Route::get('video',new VideoController(),'play');


