<?php
namespace Shape;

class Rectangle extends Square implements ShapeInterface
{
    private float $width;

    public function __construct($length, $width){
        parent::__construct($length);
        $this->width = $width;

    }


    public function area(): float{
        return $this->length * $this->width;

    }


}