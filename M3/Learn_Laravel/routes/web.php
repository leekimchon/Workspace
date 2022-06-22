<?php

use Illuminate\Support\Facades\Route;
use Whoops\Run;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TesttControler;
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

Route::get('/', function(){
    return view('welcome');
});

Route::resource('admin', UserController::class);

Route::get('test/{id_test?}/show/{id_show?}',[TestController::class, 'show']);
Route::resource('/testt', TesttControler::class);