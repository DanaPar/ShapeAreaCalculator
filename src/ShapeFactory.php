<?php

namespace Shape;

class ShapeFactory
{

    protected Shape $shape;
    private string $name;
    private string $length;
    private string $width;
    private string $sqLength;
    private string $radius;
    private string $eqLength;
    private string $rLengthA;
    private string $rLengthB;
    private string $lengthA;
    private string $lengthB;
    private string $lengthC;

public function __construct(string $name, $length, $width, $sqLength, $radius, $eqLength, $rLengthA, $rLengthB, $lengthA, $lengthB, $lengthC){
    $this->name = $name;
    $this->length = $length;
    $this->width = $width;
    $this->sqLength = $sqLength;
    $this->radius = $radius;
    $this->eqLength = $eqLength;
    $this->rLengthA = $rLengthA;
    $this->rLengthB = $rLengthB;
    $this->lengthA = $lengthA;
    $this->lengthB = $lengthB;
    $this->lengthC = $lengthC;
}


public function createShape(ShapeEnum $shapeEnum): Shape
    {
        if ($shapeEnum === ShapeEnum::Rectangle) {
            $this->shape = new Rectangle($this->length, $this->width, $this->name);
        } elseif ($shapeEnum === ShapeEnum::Square) {
            $this->shape = new Square($this->sqLength, $this->name);
        } elseif ($shapeEnum === ShapeEnum::Circle) {
            $this->shape = new Circle($this->radius, $this->name);
        } elseif ($shapeEnum === ShapeEnum::EquilateralTriangle) {
            $this->shape = new EquilateralTriangle($this->eqLength, $this->name);
        } elseif ($shapeEnum === ShapeEnum::RightAngleTriangle) {
            $this->shape = new RightAngleTriangle($this->rLengthA, $this->rLengthB, $this->name);
        } elseif ($shapeEnum === ShapeEnum::Triangle) {
            $this->shape = new Triangle($this->lengthA, $this->lengthB, $this->lengthC, $this->name);
        }
        return $this->shape;
    }

}

