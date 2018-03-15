<?php
abstract class AbstractFactory {
    abstract function getColor($param);
    abstract function getShape($param);
}