<?php
class Controller{
    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data = [], $data_1 = [], $data_2 = [], $data_3 = [], $data_4 = [], $data_5 = [], $data_6 = []){
        require_once "./mvc/views/".$view.".php";
    }
}
?>