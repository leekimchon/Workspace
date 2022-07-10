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
        $category = Category::find( $id );
        $categories = Category::all();
        $option  = Recursive::recursiveCategory( $categories, $category->parent_id );
        $data = [
            'category' => $category,
            'option' => $option
        ];
        return view( 'category.edit', $data );
    }
    public function update($id, Request $request){
        Category::find($id)->update([ 
            'name' => $request->name,
            'parent_id' => $request->parent_id
        ]);
        return redirect()->route('categories.index');
    }
    public function delete($id){
        Category::find($id)->delete();
        return redirect()->route('categories.index');
    }
}