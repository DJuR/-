<?php
class Single {
    private static $instance = null;

    private function __contstruct() {

    }

    public static function getInstance()
    {
        if(self::$instance == null) {
            self::$instance = new self;
            echo "new self \n";
        }

        return self::$instance;
    }

    public function showMessage()
    {
        echo "This is 单例模式.\n";
    }
}