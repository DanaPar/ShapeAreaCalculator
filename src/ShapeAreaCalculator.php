<?php
namespace Shape;

final class ShapeAreaCalculator
{
    public function calculate(Shape $shape): float {
        return $shape->area();
    }
}