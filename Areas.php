<?php
require ("vendor/autoload.php");

use Shape\Circle;
use Shape\Rectangle;
use Shape\ShapeAreaCalculator;
use Shape\Square;


$name = $_POST["name"];
$length = $_POST["length"];
$width = $_POST["width"];
$sqLength = $_POST["lengthsq"];
$radius = $_POST["radius"];

if (isset($_POST["rectangle"])){
    $shape = new Rectangle($length, $width, $name);
} elseif (isset($_POST["square"])){
    $shape = new Square($sqLength, $name);
} elseif (isset($_POST["circle"])){
    $shape = new Circle($radius, $name);
}



$math = new ShapeAreaCalculator();
echo "Shape " . $shape->getName() . " area is " . $math->calculate($shape) . "\n";

