<?php
require ("vendor/autoload.php");

use Shape\ShapeEnum;
use Shape\ShapeFactory;
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
    $enum = ShapeEnum::Rectangle;
} elseif (isset($_POST["square"])){
    $enum = ShapeEnum::Square;
} elseif (isset($_POST["circle"])){
    $enum =ShapeEnum::Circle;
} elseif (isset($_POST["eqTriangle"])){
    $enum = ShapeEnum::EquilateralTriangle;
} elseif (isset($_POST["rTriangle"])){
    $enum =ShapeEnum::RightAngleTriangle;
} elseif (isset($_POST["triangle"])){
    $enum = ShapeEnum::Triangle;
} else {
    $enum = "Shape not found";
}


$shape = new ShapeFactory($name, $length, $width, $sqLength, $radius, $eqLength, $rLengthA, $rLengthB, $lengthA, $lengthB, $lengthC);
$math = new ShapeAreaCalculator();
echo $math->calculate($shape->createShape($enum));

