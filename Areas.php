<?php
require ("vendor/autoload.php");

use Shape\Circle;
use Shape\Rectangle;
use Shape\Square;
use Shape\RightAngleTriangle;
use Shape\EquilateralTriangle;
use Shape\Triangle;
use Shape\ShapeAreaCalculator;

$name = $_POST["name"];
$length = $_POST["length"];
$width = $_POST["width"];
$sqLength = $_POST["lengthsq"];
$radius = $_POST["radius"];
$eqLength = $_POST["eqLength"];
$rLengthA = $_POST["rLengthA"];
$rLengthB = $_POST["rLengthB"];
$lengthA = $_POST["lengthA"];
$lengthB = $_POST["lengthB"];
$lengthC = $_POST["lengthC"];

if (isset($_POST["rectangle"])){
    $shape = new Rectangle($length, $width, $name);
} elseif (isset($_POST["square"])){
    $shape = new Square($sqLength, $name);
} elseif (isset($_POST["circle"])){
    $shape = new Circle($radius, $name);
} elseif (isset($_POST["eqTriangle"])){
    $shape = new EquilateralTriangle($eqLength, $name);
} elseif (isset($_POST["rTriangle"])){
    $shape = new RightAngleTriangle($rLengthA, $rLengthB, $name);
} elseif (isset($_POST["triangle"])){
    $shape = new Triangle($lengthA, $lengthB, $lengthC, $name);
}




$math = new ShapeAreaCalculator();
echo "Shape " . $shape->getName() . " area is " . $math->calculate($shape) . "\n";

