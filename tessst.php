<?php 
class test{
    public $a;
    public $b;
    public function __construct($a = 1, $b =2){
        $this->a = $a;
        $this->b = $b;
    }
    public function getA(){
        return $this->a;
    }
    public function getB(){
        return $this->b;
    }
}
$test1 = new test(2);
var_dump($test1);
?>