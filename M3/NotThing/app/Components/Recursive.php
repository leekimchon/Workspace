<?php

namespace App\Components;

class Recursive {
    static private $result = '';
    
    static function recursiveCategory($data, $id = 0, $text = '') {
        foreach ($data as $value) {
            if ($value['parent_id'] == $id) {
                $id = $value['parent_id'];
                $name = $value['name'];
                Recursive::$result .= "<option value=" . $id . "> $text$name </option>";
                Recursive::recursiveCategory($data, $value['id'], $text . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp');
            }
        }
        return Recursive::$result;
    }
}
