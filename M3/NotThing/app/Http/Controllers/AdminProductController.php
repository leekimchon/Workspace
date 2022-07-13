<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Components\Recursive;
use App\Traits\StorageImageTrait;

class AdminProductController extends Controller {
    use StorageImageTrait;
    public $result = '';

    function index(){
        return view('admin.product.index');
    }
    function create(){
        $categories = Category::all();
        $option  = Recursive::recursiveCategory( $categories );
        return view('admin.product.add', ['option' => $option]);
    }
    function store(Request $request){
        $data_upload = $this->storageTraitUpload($request, 'feature_image_path', 'product');
        if($data_upload){
            $product = new Product();
            $product->feature_image_name = $data_upload['file_name'];
            $product->feature_image_path = $data_upload['file_path'];
            $product->save();
        }
    }
}
