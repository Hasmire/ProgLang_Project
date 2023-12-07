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
}

class MyClass
{
    public $property;

    public function __construct($value)
    {
        $this->property = $value;
    }
}
