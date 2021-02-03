<?php

$name = 'test';
$$name = 'john';
$$$name = 'jeffrey';

echo $test . "\n";
echo $john . "\n";
echo $name . ' ' . $$name . ' ' . $$$name . "\n\n";


// ==== Documentation Example ==== \\

$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$a = "Hello";

echo $a; // Returns Hello 
echo $$a; // Returns World
echo $$$a; // Returns Foo
echo $$$$a; // Returns Bar
echo $$$$$a; // Returns a

/**
 * "a" = "Hello", "a" = "World"; when adding the dollar sign, you get the Hello variable.
 * Basically, you get the return of "a" and look for a variable with this name.
 * 
 * $$$$$a = $Hello$World$Foo$Bar$a.
*/