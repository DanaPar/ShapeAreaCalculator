<?php
namespace Shape;


class Circle  extends Shape
{
    private float $radius;


    public function __construct(float $radius, $name){
        parent::__construct($name);
        $this->radius = $radius;
    }


    public function area(): float
    {
        return pi() * pow($this->radius, 2);
    }


}