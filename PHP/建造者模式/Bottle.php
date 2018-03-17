<?php
require_once './Packing.php';
// 瓶子

class Bottle implements Packing {
    public function pack() {
        return "Bottle.\n";
    }
}