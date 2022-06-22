<?php
class ADB{
    public static function alo(){
        echo "alo";
    }
}
class DSB extends ADB{
    function ha(){
        ADB::alo();
    }
}
$dfs = new DSB();
$dfs->ha();
?>
