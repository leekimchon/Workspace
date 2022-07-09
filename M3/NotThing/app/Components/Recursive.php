<?php

namespace App\Components;

class Recursive {
    static private $result = '';
    
    static function recursiveCategory($data, $id = 0, $text = '') {
        foreach ($data as $value) {
            if ($value['parent_id'] == $id) {
                $id_primary = $value['id'];
                $name = $value['name'];
                Recursive::$result .= "<option value=" . $id_primary . "> $text$name </option>";
                Recursive::recursiveCategory($data, $id_primary, $text . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp');
            }
        }
        return Recursive::$result;
    }
}
