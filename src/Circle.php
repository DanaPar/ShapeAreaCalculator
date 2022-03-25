<?php
namespace Shape;


class Circle  implements ShapeInterface
{
    private float $radius;
    private string $name;

    public function __construct(float $radius){
        $this->radius = $radius;

    }

    public function setName(string $name){
        $this->name = $name;
    }

        public function getName(): string
    {
        return $this->name;
    }

    public function area(): float{
        return pi() * pow($this->radius, 2);
    }


}