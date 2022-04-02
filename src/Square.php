<?php
namespace Shape;

class Square extends Shape
{
    private float $length;

    public function __construct(float $length, string $name)
    {
        parent::__construct($name);
        $this->length = $length;
    }

    final public function getLength(): float{
        return $this->length;
    }

    public function area(): float
    {
        return $this->length * $this->length;
    }

}
