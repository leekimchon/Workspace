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
    function recursive($id, $text) {
        $data = Category::all();
        for ($i = 0; $i < count($data); $i++) {
            if ($data[$i]['parent_id'] == $id) {
                $id = $data[$i]['parent_id'];
                $name = $text . $data[$i]['name'];
                $this->result .= "<option value=" . $id . "> $text$name </option>";
                $this->recursive($data[$i]['id'], $text . '&nbsp&nbsp&nbsp');
            }
        }
        return $this->result;
    }
    public function create() {
        return view('category.add', ['option' => $this->recursive(0, '')]);
    }
}
