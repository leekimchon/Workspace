<?php
class Home extends Controller{
    function index(){
        $ba = $this->model("SinhVienModel");
        $this->view('aodep');
    }
    function Show(){
        $this->view('aodep');
    }
}
?>
