<?php
require_once './Packing.php';
// 包装
class Wrapper implements Packing {
    public function pack()
    {
        return "Wrapper. \n";
    }
}