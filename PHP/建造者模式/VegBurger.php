<?php
require_once "./Burger.php";

class VegBurger extends Burger {
    public function price()
    {
        return '2.05\n';
    }

    public function name()
    {
        return "VegBurger\n";
    }
}