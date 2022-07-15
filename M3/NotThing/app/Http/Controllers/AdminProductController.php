<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Components\Recursive;
use App\Models\ProductImage;
use App\Traits\StorageImageTrait;

class AdminProductController extends Controller {
    use StorageImageTrait;
    public $result = '';

    function index() {
        $products = Product::latest()->paginate(5);
        $params = [
            'products' => $products
        ];
        return view('admin.product.index', $params);
    }
    function create() {
        $categories = Category::all();
        $products = Product::all();
        $option  = Recursive::recursiveCategory($categories);
        return view('admin.product.add', ['option' => $option, 'products' => $products]);
    }
    function store(Request $request) {
        $file_feature = $request->file('feature_image_path');
        $feature_path = 'storage/' . $file_feature->store('images/product', 'public');

        $data_create = [
            'name' => $request->name,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'category_id' => $request->category_id,
            'feature_image_path' => $feature_path
        ];
        $product = Product::create($data_create);

        $file_details = $request->file('detail_image_path');
        foreach($file_details as $file_detail){
            $detail_path = 'storage/' . $file_detail->store('images/product', 'public');
            $data_image_detail = [
                'detail_image_path' => $detail_path,
                'product_id' => $product->id
            ];
            ProductImage::create($data_image_detail);
        }
        return redirect()->route('product.index');
    }
}