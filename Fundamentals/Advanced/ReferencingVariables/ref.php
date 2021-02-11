<?php

// You can pass a variable by reference to a function so the function can modify the variable.

$name = 'John';

function Test(string &$arg) {
    $arg = 'Jorge';
}

Test($name); // Pass John
echo $name; // Returns Jorge

echo "\n\n";

// You can also use references with variables;

$foo = 'Gabriel';

$test = &$foo; // test now it's a reference to $foo.

echo $test . "\n"; // Return 'Gabriel'.

$test = 'Jao'; // by setting $test to another value, the $foo variable also will change its value, cause $test is a reference to $foo.

echo $foo . "\n"; // Returns 'Jao'.