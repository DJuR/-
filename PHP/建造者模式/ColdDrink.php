<?php
require_once "./Item.php";
require_once "./Bootle.php";

abstract class ColdDrink implements Item {
    public function packing()
    {
        return new Bootle();
    }

    public abstract function price();
}