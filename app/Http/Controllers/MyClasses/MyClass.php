<?php

namespace App\Http\Controllers\MyClasses;

class MyClass
{
    public $property;

    public function __construct($value)
    {
        $this->property = $value;
    }
}
