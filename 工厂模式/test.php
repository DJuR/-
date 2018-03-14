<?php
require_once './ShapeFactory.php';

$ShapeFactory = new ShapeFactory();

$Square = $ShapeFactory::getShape('Square');
$Square->draw();

$Circle = $ShapeFactory::getShape('Circle');
$Circle->draw();

$Rectangle = $ShapeFactory::getShape('Rectangle');
$Rectangle->draw();