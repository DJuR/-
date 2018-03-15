<?php
include_once './AbstractFactory.php';
class ColorFactory extends AbstractFactory {
    public function getShape($className)
    {

    }

    public function getColor($className)
    {
        if(file_exists($dir = "./{$className}.php")) {
            require_once $dir;
            if(class_exists($className)) {
                return new $className;
            }
        }
    }
}