<?php

#region Variables & Consts

/**
 * Variables are used to store information,
 * to be referenced and manipulated later.
 * 
 * We have 8 types of variables Such as:
 * 
 * byte: integers (8 bit, minimum value of -128, and maximum value of 127),
 * short: integers (minimum value of -32,768 and a maximum value of 32,767)
 * int: integers (32 bit, minimum value of -2^31, and a maximum value of 2^31 - 1),
 * long: really long integers (64 bit, minimum value of -2^63 and a maximum value of 2^63 - 1)
 * float: decimal numbers (32 bit),
 * double: decimal numbers (64 bit),
 * boolean: True or False (1 bit, 0 | 1),
 * char: Single Unicode character (16 bit, minimum value of '\u0000' (or 0) and a maximum value of '\uffff' (or 65,535 inclusive))
 * 
 * And Non-primitive data types:
 * 
 * String: words and text (8 bit or 16 bit, based on text width)
 * Arrays: a collection of elements (values or variables)
 * 
 * Also we have:
 * Null: Nothing
 * Object: stores not only data but also information on how to process that data
 * 
 * But php only uses:
 * Strings, Int, float, Boolean, Array, Null and Object.
*/

    // the Dollar sign ($) is used to create or reference a variable
    // Variable Structure: { $variableName = someValue; OR $variableName; }
    
    $int = 1;
    $string = "Hallo!";
    $float = 12.5;

    $boolean = true;
    $boolean2 = false;
    
    $null = null;
    
    $array = [];
    $array2 = array();

    $name = 'Gui'; // string variable 
    echo 'My name is ' . $name . '<br>' . '<br>'; // printing variable

    const NAME = 'Gabriel'; // constant
    echo NAME.'<br>'; // printing constant

#endregion

#region Concatenation

    $className = 'Box';
    $id = 5;

    echo 'the id is: ' . $id . '<br>' . '<br>';

    echo "<div class = \"$className\"> </div>";

#endregion

#region Math

    $number = 5 + 5;
    $number1 = 10 - 4;

    $result = $number * $number1;
    $result1 = $result / 5;

    echo $result1.'<br>';

    $expression = 20 * (2 + 40) / 2;
    $rest = 1 % 2;

    echo $expression.'<br>'.
    $rest . '<br>' . '<br>';

#endregion

#region Arrays

    $N = ['Gabriel' , 'John' , 'Mari'];

    echo $N[0].'<br>';
    echo $N[1].'<br>';
    echo $N[2].'<br>' . '<br>';

    $information['n'] = 'G';
    $information['i'] = 2;
    $information['c'] = 'F';

    echo $information['n'].'<br>';
    echo $information['i'].'<br>';
    echo $information['c'].'<br>' . '<br>';

#endregion