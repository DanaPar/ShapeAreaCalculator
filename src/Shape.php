<?php

namespace Shape;

abstract class Shape implements ShapeInterface
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function area();



}