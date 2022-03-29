<?php
namespace Shape;

class Triangle extends RightAngleTriangle
{

    private float $lengthC;

    public function __construct($lengthA, $lengthB, $lengthC, $name)
    {
        parent::__construct($lengthA, $lengthB, $name);
        $this->lengthC = $lengthC;
    }

    public function area(): float
    {
        $halfPerimeter = ($this->lengthA + $this->lengthB +$this->lengthC) / 2;
        return sqrt($halfPerimeter * ($halfPerimeter - $this->lengthA) * ($halfPerimeter - $this->lengthB) * ($halfPerimeter - $this->lengthC));
    }
}