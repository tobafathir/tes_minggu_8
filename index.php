<?php
require 'vendor/autoload.php';
use Boox\Square;
use Boox\Circle;
use Boox\Triangle;

echo (new Square())->getArea().PHP_EOL;
echo (new Triangle())->getArea().PHP_EOL;
echo (new Circle())->getArea().PHP_EOL;
