<?php
namespace Shape;

class Square extends Shape
{
    protected float $length;

    public function __construct(float $length, string $name)
    {
        parent::__construct($name);
        $this->length = $length;
    }


    public function area(): float
    {
        return $this->length * $this->length;
    }

}
