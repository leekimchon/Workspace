<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recursive;

class CategoryController extends Controller {
    public $result = '';
    public function index() {
        $categories = Category::latest()->paginate(5);
        return view('category.index', ['categories' => $categories] );
    }
    public function create() {
        $data = Category::all();
        $option  = Recursive::recursiveCategory( $data );
        return view( 'category.add', ['option' => $option] );
    }
    public function store( Request $request ){
        $request->validate([
            'name' => 'required',
            'parent_id' => 'required'
        ]);
        Category::create( $request->all() );
        return redirect()->route('categories.index');
    }
    public function edit($id){

    }
    public function delete($id){
        
    }
}