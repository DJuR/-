<?php
require_once "./ColdDrink.php";

class Coke extends ColdDrink {
    public function price()
    {
        return "10";
    }

    public function name()
    {
        return "coke";
    }
}

