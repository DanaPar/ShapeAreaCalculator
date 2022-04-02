<?php
namespace Shape;
class RightAngleTriangle extends EquilateralTriangle
{

    private float $lengthB;
    private const ONE = 1;
    protected const FOR_HALFING = 2;

    public function __construct(float $lengthA, float $lengthB, string $name)
    {
        parent::__construct($lengthA, $name);
        $this->lengthB = $lengthB;
    }

    final public function getLengthB(): float{
        return $this->lengthB;
    }

    public function area(): float
    {
        return self::ONE / self::FOR_HALFING * $this->getLengthA() * $this->lengthB;
    }
}