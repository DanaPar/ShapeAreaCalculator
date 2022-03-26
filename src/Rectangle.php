<?php
namespace Shape;

class Rectangle extends Square
{
    private float $width;

    public function __construct($length, $width, $name)
    {
        parent::__construct($length, $name);
        $this->width = $width;
    }

    public function area(): float
    {
        return $this->length * $this->width;
    }


}