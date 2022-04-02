<?php
namespace Shape;

final class Rectangle extends Square
{
    private float $width;

    public function __construct(float $length, float $width, string $name)
    {
        parent::__construct($length, $name);
        $this->width = $width;
    }

    public function area(): float
    {
        return $this->getLength() * $this->width;
    }


}