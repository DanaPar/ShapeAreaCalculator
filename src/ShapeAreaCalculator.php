<?php
namespace Shape;

class ShapeAreaCalculator
{
    public function calculate(ShapeInterface $shape): float {
        return $shape->area();
    }
}