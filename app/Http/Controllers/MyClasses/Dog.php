<?php

namespace App\Http\Controllers\MyClasses;

class Dog extends Animal
{
    public function makeSound()
    {
        return 'Woof!';
    }
}
