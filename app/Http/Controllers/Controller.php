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
}
