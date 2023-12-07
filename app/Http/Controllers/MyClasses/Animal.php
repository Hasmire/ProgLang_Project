<?php

namespace App\Http\Controllers\MyClasses;

class Animal
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function makeSound()
    {
        return 'Generic Animal Sound';
    }
}
