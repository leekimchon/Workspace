<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recursive;

class CategoryController extends Controller {
    public $result = '';
    public function index() {
        return view('category.index');
    }
    public function create() {
        $data = Category::all();
        $option  = Recursive::recursiveCategory( $data );
        return view('category.add', ['option' => $option]);
    }
    public function store( Request $request ){
        Category::create( $request->all() );
        return redirect()->route('categories.index');
    }
}