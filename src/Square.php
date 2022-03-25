<?php
namespace Shape;

class Square implements ShapeInterface
{
    protected float $length;
    private string $name;

    public function __construct(float $length)
    {
        $this->length = $length;
    }


    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName(): string{
        return $this->name;
    }

    public function area()
    {
        return $this->length * $this->length;
    }

}
