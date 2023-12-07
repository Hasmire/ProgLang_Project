<?php

namespace App\Http\Controllers\MyClasses;

class Circle implements Shape
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}
