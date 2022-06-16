<?php

use Illuminate\Support\Facades\Route;
use Whoops\Run;

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

Route::get('/bla/{id?}/bal/{idd?}', function ($id = 0, $idd = 0){
    return $id.$idd;
});
Route::get('/', function(){
    return view('welcome');
});
Route::prefix('/alo')->group(function(){
    Route::get('/bla', function(){
        return 'daylabla';
    });
    Route::get('/blo/{id}', function($id){
        return $id;
    })->name('alo.blo');
});
