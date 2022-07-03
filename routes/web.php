<?php

use App\Http\Controllers\DirectoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DirectoryController::class,'home']);
Route::get('/dir', [DirectoryController::class,'dir']);
Route::get('/mkdir',[DirectoryController::class,'mkdir']);
Route::get('/dldir',[DirectoryController::class,'dldir']);


