<?php
include_once './AbstractFactory.php';

class ShapeFactory extends AbstractFactory  {

    function  getShape($param){
        if($param == null) {
            return null;
        }

        if(file_exists($dir = "./{$param}.php")) {
            require_once $dir;
            if(class_exists($param)) {
                return new $param;
            }
        } 

        return null;
    }

    function getColor($param)
    {
        return '';
    }
}