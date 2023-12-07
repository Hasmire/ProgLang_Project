<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function demoBinding()
    {
        echo '<img src="'.asset('images/binding_snippet.png').'" alt="Your Image" width="900">';
        // Dynamic binding example
        $variable = 10;  // integer
        dump("Original Value: $variable");

        $variable = 'Hello, world!';  // now a string
        dump("New Value: $variable");
        $variable = 3.14;  // now a float
        dump("Updated Value: $variable");

        // Automatic type conversion
        $number = '5';  // $number is a string
        $result = $number + 10;  // PHP will automatically convert $number to an integer for the addition
        dump("Result: $result");
    }

    public function demoDataType()
    {
        echo '<img src="'.asset('images/datatype_snippet_1.png').'" alt="Your Image" height="350">';
        echo '<img src="'.asset('images/datatype_snippet_2.png').'" alt="Your Image" height="300">';
        // Integer
        $integerVar = 42;
        dump("Integer: $integerVar");

        // Float
        $floatVar = 3.14;
        dump("Float: $floatVar");

        // String
        $stringVar = 'Hello, World!';
        dump("String: $stringVar");

        // Boolean
        $boolVar = true;
        dump('Boolean: '.var_export($boolVar, true));

        // Array
        $arrayVar = [1, 2, 3];
        dump('Array: ', $arrayVar);

        // Object
        $objectVar = new MyClass('ObjectProperty');
        dump('Object Property: '.$objectVar->property);
    }

    public function demoOOP()
    {
        echo '<img src="'.asset('images/oop_snippet_2.png').'" alt="Your Image" width="200">';
        echo '<img src="'.asset('images/oop_snippet_3.png').'" alt="Your Image" width="200">';
        echo '<img src="'.asset('images/oop_snippet_1.png').'" alt="Your Image" height="300">';

        // Encapsulation and Inheritance
        $genericAnimal = new Animal('Generic Animal');
        $dog = new Dog('Buddy');
        $cat = new Cat('Whiskers');

        dump('Animal: '.$genericAnimal->getName().', Sound: '.$genericAnimal->makeSound());
        dump('Dog: '.$dog->getName().' , Sound: '.$dog->makeSound());
        dump('Cat: '.$cat->getName().' , Sound: '.$cat->makeSound());

        //Polymorphism
        $circle = new Circle(5);
        $square = new Square(4);

        dump('Circle Area: '.$circle->calculateArea());
        dump('Square Area: '.$square->calculateArea());
    }
}

class MyClass
{
    public $property;

    public function __construct($value)
    {
        $this->property = $value;
    }
}

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

class Dog extends Animal
{
    public function makeSound()
    {
        return 'Woof!';
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        return 'Meow!';
    }
}

interface Shape
{
    public function calculateArea();
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}

class Square implements Shape
{
    private $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function calculateArea()
    {
        return $this->side * $this->side;
    }
}
