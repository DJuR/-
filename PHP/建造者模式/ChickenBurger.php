<?php
require_once "./Burger.php";

class ChickenBurger extends Burger {
    public function price()
    {
        return "2.06";
    }

    public function name()
    {
        return "Chicken Burger";
    }
}