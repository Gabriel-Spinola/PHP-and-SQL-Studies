<?php

// You can pass a variable by reference to a function so the function can modify the variable.

$name = 'John';

function Test(string &$arg) {
    $arg = 'Jorge';
}

Test($name); // Pass John
echo $name; // Returns Jorge