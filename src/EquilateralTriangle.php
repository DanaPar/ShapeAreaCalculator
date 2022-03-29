<?php
namespace Shape;
class EquilateralTriangle extends Shape
{
    protected float $lengthA;

    public function __construct(float $lengthA, string $name)
    {
        parent::__construct($name);
        $this->lengthA = $lengthA;
    }

    public function area(): float
    {
        return sqrt(3) / 4 * $this->lengthA * $this->lengthA;
    }
}