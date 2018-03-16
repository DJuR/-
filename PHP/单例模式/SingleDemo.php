<?php
include './Single.php';
class SingleDemo {
    
    public function show()
    {
        $test = Single::getInstance();
        $test->showMessage();
    }
}

$singleDemo1 = new SingleDemo();
$singleDemo1->show();

$singleDemo2 = new SingleDemo();
$singleDemo2->show();