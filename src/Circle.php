<?php
namespace Shape;


final class Circle  extends Shape
{
    private float $radius;
    private const SQUARE = 2;

    public function __construct(float $radius, string $name){
        parent::__construct($name);
        $this->radius = $radius;
    }


    public function area(): float
    {
        return pi() * pow($this->radius, self::SQUARE);
    }


}