<?php
namespace Shape;

class ShapeAreaCalculator
{
    public function calculate(Shape $shape): float {
        return $shape->area();
    }
}