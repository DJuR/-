<?php
require './FactoryProducer.php';

$factoryProducer = new FactoryProducer();

$shapeFactory = $factoryProducer->getFactory('ShapeFactory');
$shapeFactory->getShape('Circle')->draw();

$colorFactory = $factoryProducer->getFactory('ColorFactory');
$colorFactory->getColor('Red')->fill();