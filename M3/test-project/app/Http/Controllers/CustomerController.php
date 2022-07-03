<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
    function index(){
        $categories = DB::table('categories')
        ->pluck('display','id', 'name');
        echo "<pre>";
        print_r($categories);
    }
}
