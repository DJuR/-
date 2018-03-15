<?php
class FactoryProducer {
    public static function getFactory($className)
    {
        if(file_exists($dir = "./{$className}.php")) {

            require $dir;
            
            if (class_exists($className)) {
                return new $className();
            }

            return null;
        }
    }
}