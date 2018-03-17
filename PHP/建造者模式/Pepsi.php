<?php
require_once "./ColdDrink.php";

class Pepsi extends ColdDrink {
    public function price()
    {
        return '12';
    }

    public function name()
    {
        return "pepsi";
    }
}