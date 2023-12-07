<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MyClasses\Animal;
use App\Http\Controllers\MyClasses\Cat;
use App\Http\Controllers\MyClasses\Circle;
use App\Http\Controllers\MyClasses\Dog;
use App\Http\Controllers\MyClasses\ErrorHandler;
use App\Http\Controllers\MyClasses\MyClass;
use App\Http\Controllers\MyClasses\Suit;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function demoProceduralObject()
    {
        echo '<img src="'.asset('images/procedure_snippet.jpg').'" alt="Your Image" width="900">';

        function calculateCircleArea($radius)
        {
            return pi() * $radius * $radius;
        }

        $circleRadius = 5;
        $area = calculateCircleArea($circleRadius);

        dump("Procedural Approach: Area of the circle with radius {$circleRadius} is {$area}");

        echo '<img src="'.asset('images/object_snippet.jpg').'" alt="Your Image" width="900">';

        $circle = new Circle(5);
        $area = $circle->calculateArea();

        dump("Object-Oriented Approach: Area of the circle with radius {$circle->radius} is {$area}");
    }

    public function demoVersionUpgrades()
    {
        echo '<img src="'.asset('images/enum.png').'" alt="Your Image" height="400">';
        echo '<img src="'.asset('images/enum2.png').'" alt="Your Image" height="400">';
        //Enum demo
        dump(Suit::Clubs);
        dump(Suit::Diamonds);
        dump(Suit::Hearts);
        dump(Suit::Spades);
    }

    public function demoBinding()
    {
        echo '<img src="'.asset('images/binding_snippet.png').'" alt="Your Image" height=500">';
        // Dynamic binding example
        $variable = 10;  // integer
        dump("Original Value: {$variable}");

        $variable = 'Hello, world!';  // string
        dump("New Value: {$variable}");
        $variable = 3.14;  // float
        dump("Updated Value: {$variable}");

        // Automatic type conversion
        $number = '5';  //  string
        $result = $number + 10;  // PHP will automatically convert $number to an integer for the addition
        dump("Result: {$result}");
    }

    public function demoDataType()
    {
        echo '<img src="'.asset('images/datatype_snippet_1.png').'" alt="Your Image" height="500">';
        echo '<img src="'.asset('images/datatype_snippet_2.png').'" alt="Your Image" height="500">';
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
        dump('Boolean: '.var_export($boolVar, true));

        // Array
        $arrayVar = [1, 2, 3];
        dump($arrayVar);

        // Object
        $objectVar = new MyClass('ObjectProperty');
        dump('Object Property: '.$objectVar->property);
    }

    public function demoOOP()
    {
        echo '<img src="'.asset('images/oop_snippet_2.png').'" alt="Your Image" height="400">';
        echo '<img src="'.asset('images/oop_snippet_1.png').'" alt="Your Image" height="400">';

        // Encapsulation, Inheritance and Polymorphism
        $genericAnimal = new Animal('Generic Animal');
        $dog = new Dog('Buddy');
        $cat = new Cat('Whiskers');

        dump('Animal: '.$genericAnimal->getName().', Sound: '.$genericAnimal->makeSound());
        dump('Dog: '.$dog->getName().' , Sound: '.$dog->makeSound());
        dump('Cat: '.$cat->getName().' , Sound: '.$cat->makeSound());
    }

    public function errorHandling()
    {

        echo '<div style="text-align: center;">';

        echo '<div style="margin-right: 10px;">';
        echo '<img src="'.asset('images/error-handling2.png').'" alt="Your Image" width="700">';
        echo '</div>';

        echo '<div style="margin-right: 10px;">';
        echo '<img src="'.asset('images/error-handling3.png').'" alt="Your Image" width="700">';
        echo '</div>';

        echo '<div style="margin-right: 10px;">';
        echo '<img src="'.asset('images/error-handling1.png').'" alt="Your Image" width="700">';
        echo '</div>';

        echo '</div>';

        // Create an instance of ErrorHandler Class
        $myClass = new ErrorHandler();

        // Set the error handler to the user-defined error handler
        $old_error_handler = set_error_handler([$myClass, 'myErrorHandler']);

        // Trigger some errors using the MyClass methods
        dump('vector a');
        $a = [2, 3, 'foo', 5.5, 43.3, 21.11];
        dump($a);

        // now generate second array
        dump('vector b - a notice (b = log(PI) * a)');
        // Warning about non-numeric values, and the result is printed.
        $b = $myClass->scale_by_log($a, M_PI);
        dump($b);

        // pass a string instead of an array
        dump('vector c - a warning');
        // Warning about incorrect input, and var_dump shows that the function returns NULL.
        $c = $myClass->scale_by_log('not array', 2.3);
        dump($c);

        // Fatal error about the logarithm of a non-positive number, and var_dump is not reached as the script terminates.
        dump('vector d - fatal error');
        $d = $myClass->scale_by_log($a, -2.5);
        dump($d); // Never reached

    }

    public function databaseDemo()
    {

        echo '<div style="text-align: center;">';

        echo '<div style="margin-right: 10px;">';
        echo '<img src="'.asset('images/database-demo1.png').'" alt="Your Image" width="700">';
        echo '</div>';

        echo '<div style="margin-right: 10px;">';
        echo '<img src="'.asset('images/database-demo2.png').'" alt="Your Image" width="700">';
        echo '</div>';

        echo '</div>';

        $users = User::all(); // Use the User model to fetch users

        // Start building an HTML string
        $output = '<div style="text-align: center; font-size: 24px; margin-top: 50px;">';

        foreach ($users as $user) {
            // Add user information to the HTML string
            $output .= "<p>User: {$user->name} - Email: {$user->email}</p>";
        }

        // Close the HTML div tag
        $output .= '</div>';

        // Echo the HTML string
        echo $output;
    }

    public function crossPlatformDemo()
    {
        $output = '<div style="text-align: center; font-size: 24px; margin-top: 50px;">';

        $commands = [
            '# Install Laravel Homestead globally',
            'composer global require laravel/homestead',
            '# Initialize Homestead in your Laravel project',
            'php vendor/bin/homestead make',
            '# Start the virtual machine',
            'vagrant up',
            '# Access the Laravel application in your browser',
        ];

        foreach ($commands as $command) {
            // Add each command to the HTML string
            $output .= "<p>{$command}</p>";
        }

        // Close the HTML div tag
        $output .= '</div>';

        // Echo the HTML string
        echo $output;
    }
}
