<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller {
    function index(){
        $sliders = Slider::latest()->paginate(5);
        $params = [
            'sliders' => $sliders
        ];
        return view('admin.slider.index', $params);
    }
    function create(){
        return view('admin.slider.add');
    }
    function store(Request $request){
        $file_image = $request->file('image');
        $path_image = 'storage/'.$file_image->store('images/slider', 'public');
        $data_create = [
            'link_load' => $request->link_load,
            'image' => $path_image
        ];
        $slider = Slider::create($data_create);
        return redirect()->route('slider.index');
    }

}
