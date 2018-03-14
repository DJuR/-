<?php
class ShapeFactory {

    public static function getShape($objShape){
        if($objShape == null) {
            return null;
        }

        if(file_exists($dir = "./{$objShape}.php")) {
            require $dir;
        } else {
            return null;
        }
        
        if(class_exists($objShape)) {
            return new $objShape;
        }

        return '';
    }
}