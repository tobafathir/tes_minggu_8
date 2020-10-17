<?php

namespace Boox;
use Boox\Shape;

class Circle extends Shape
{
    private $radius=14;

    public function getArea()
    {
        return $this->radius/2;
    }
}