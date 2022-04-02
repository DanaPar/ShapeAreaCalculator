<?php
namespace Shape;
class EquilateralTriangle extends Shape
{
    private float $lengthA;

    public function __construct(float $lengthA, string $name)
    {
        parent::__construct($name);
        $this->lengthA = $lengthA;
    }

    final public function getLengthA(): float{
        return $this->lengthA;
    }

    public function area(): float
    {
        return sqrt(3) / 4 * $this->lengthA * $this->lengthA;
    }
}