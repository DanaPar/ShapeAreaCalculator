<?php
namespace Shape;
class RightAngleTriangle extends EquilateralTriangle
{

    protected float $lengthB;


    public function __construct($lengthA, $lengthB, $name)
    {
        parent::__construct($lengthA, $name);
        $this->lengthB = $lengthB;
    }

    public function area(): float
    {
        return 1 / 2 * $this->lengthA * $this->lengthB;
    }
}