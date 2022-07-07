<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(){
        $allCategories = Category::where('display', 1)->get();
        foreach($allCategories as $val){
            echo $val->name."<br>";
        }
    }
}
