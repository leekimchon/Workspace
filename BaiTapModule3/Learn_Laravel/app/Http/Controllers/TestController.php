<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function show($id, $id2){
        return "$id.ddd.$id2";
    }
}
