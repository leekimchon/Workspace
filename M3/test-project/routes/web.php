<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
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

Route::group(['prefix' => 'customers'], function () {
    Route::get('/',[\App\Http\Controllers\CustomerController::class, 'index'])->name('customers.index');
});
Route::get('/', [CustomerController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index'])->name("category.index");
