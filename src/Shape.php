<?php

namespace Shape;

abstract class Shape
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    final public function getName(): string
    {
        return $this->name;
    }

    abstract public function area();



}