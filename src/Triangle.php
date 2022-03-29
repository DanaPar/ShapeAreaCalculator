<?php
namespace Shape;

class Triangle extends RightAngleTriangle
{

    private float $lengthC;

    public function __construct(float $lengthA, float $lengthB, float $lengthC, string $name)
    {
        parent::__construct($lengthA, $lengthB, $name);
        $this->lengthC = $lengthC;
    }

    public function area(): float
    {
        $halfPerimeter = ($this->getLengthA() + $this->getLengthB() +$this->lengthC) / 2;
        return sqrt($halfPerimeter * ($halfPerimeter - $this->getLengthA()) * ($halfPerimeter - $this->getLengthB()) * ($halfPerimeter - $this->lengthC));
    }
}