<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MyClasses\Animal;
use App\Http\Controllers\MyClasses\Cat;
use App\Http\Controllers\MyClasses\Circle;
use App\Http\Controllers\MyClasses\Dog;
use App\Http\Controllers\MyClasses\MyClass;
use App\Http\Controllers\MyClasses\Square;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function demoProceduralObject()
    {
        echo '<img src="' . asset('images/procedure_snippet.jpg') . '" alt="Your Image" width="900">';

        function calculateCircleArea($radius)
        {
            return pi() * $radius * $radius;
        }

        $circleRadius = 5;
        $area = calculateCircleArea($circleRadius);

        dump("Procedural Approach: Area of the circle with radius {$circleRadius} is {$area}");

        echo '<img src="' . asset('images/object_snippet.jpg') . '" alt="Your Image" width="900">';

        $circle = new Circle(5);
        $area = $circle->calculateArea();

        dump("Object-Oriented Approach: Area of the circle with radius {$circle->radius} is {$area}");
    }

    public function demoBinding()
    {
        echo '<img src="' . asset('images/binding_snippet.png') . '" alt="Your Image" width="900">';
        // Dynamic binding example
        $variable = 10;  // integer
        dump("Original Value: {$variable}");

        $variable = 'Hello, world!';  // now a string
        dump("New Value: {$variable}");
        $variable = 3.14;  // now a float
        dump("Updated Value: {$variable}");

        // Automatic type conversion
        $number = '5';  // $number is a string
        $result = $number + 10;  // PHP will automatically convert $number to an integer for the addition
        dump("Result: {$result}");
    }

    public function demoDataType()
    {
        echo '<img src="' . asset('images/datatype_snippet_1.png') . '" alt="Your Image" height="350">';
        echo '<img src="' . asset('images/datatype_snippet_2.png') . '" alt="Your Image" height="300">';
        // Integer
        $integerVar = 42;
        dump("Integer: {$integerVar}");

        // Float
        $floatVar = 3.14;
        dump("Float: {$floatVar}");

        // String
        $stringVar = 'Hello, World!';
        dump("String: {$stringVar}");

        // Boolean
        $boolVar = true;
        dump('Boolean: ' . var_export($boolVar, true));

        // Array
        $arrayVar = [1, 2, 3];
        dump($arrayVar);

        // Object
        $objectVar = new MyClass('ObjectProperty');
        dump('Object Property: ' . $objectVar->property);
    }

    public function demoOOP()
    {
        echo '<img src="' . asset('images/oop_snippet_2.png') . '" alt="Your Image" width="200">';
        echo '<img src="' . asset('images/oop_snippet_3.png') . '" alt="Your Image" width="200">';
        echo '<img src="' . asset('images/oop_snippet_1.png') . '" alt="Your Image" height="300">';

        // Encapsulation and Inheritance
        $genericAnimal = new Animal('Generic Animal');
        $dog = new Dog('Buddy');
        $cat = new Cat('Whiskers');

        dump('Animal: ' . $genericAnimal->getName() . ', Sound: ' . $genericAnimal->makeSound());
        dump('Dog: ' . $dog->getName() . ' , Sound: ' . $dog->makeSound());
        dump('Cat: ' . $cat->getName() . ' , Sound: ' . $cat->makeSound());

        //Polymorphism
        $circle = new Circle(5);
        $square = new Square(4);

        dump('Circle Area: ' . $circle->calculateArea());
        dump('Square Area: ' . $square->calculateArea());
    }
}
