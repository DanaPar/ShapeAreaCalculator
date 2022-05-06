<?php
namespace Shape;
class EquilateralTriangle extends Shape
{
    private float $lengthA;
    private const QUARTER = 4;

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
        return M_SQRT3 / self::QUARTER * $this->lengthA * $this->lengthA;
    }
}