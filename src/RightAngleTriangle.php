<?php
namespace Shape;
class RightAngleTriangle extends EquilateralTriangle
{

    private float $lengthB;


    public function __construct(float $lengthA, float $lengthB, string $name)
    {
        parent::__construct($lengthA, $name);
        $this->lengthB = $lengthB;
    }

    protected function getLengthB(): float{
        return $this->lengthB;
    }

    public function area(): float
    {
        return 1 / 2 * $this->getLengthA() * $this->lengthB;
    }
}