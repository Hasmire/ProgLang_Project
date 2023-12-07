<?php

namespace App\Http\Controllers\MyClasses;

class Cat extends Animal
{
    public function makeSound()
    {
        return 'Meow!';
    }
}
