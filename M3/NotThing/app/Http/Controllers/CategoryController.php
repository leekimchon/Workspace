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
    function recursive($id = 0, $text = '') {
        $data = Category::all();
        foreach ($data as $value) {
            if ($value['parent_id'] == $id) {
                $id = $value['parent_id'];
                $name = $value['name'];
                $this->result .= "<option value=" . $id . "> $text$name </option>";
                $this->recursive($value['id'], $text . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp');
            }
        }
        return $this->result;
    }
    public function create() {
        $data = Category::all();
        $option  = Recursive::recursiveCategory($data);
        return view('category.add', ['option' => $option]);
    }
}