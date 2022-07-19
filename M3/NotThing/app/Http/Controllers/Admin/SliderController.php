<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller {
    function index(){
        return view('admin.slider.index');
    }
    function create(){
        return view('admin.slider.add');
    }
    function store(Request $request){
        $file_image = $request->file('image');
        dd($request->file('image'));
        $path_image = 'storage/'.$file_image->store('slider/images', 'public');
        dd($path_image);
        // $data_create = [
        //     'link_load' => $request->llink_load,
        //     'image' => 
        // ];
    }
}
