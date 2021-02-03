<?php 

include 'Example.class.php';

// instance of a class
$example = new Example();
$example -> var2 = 'i';
$example -> setVar1('Gabriel'); // now the private variable var 1 is equal to 'Gabriel'

echo $example -> getVar1();

echo "<br>" . "<br>";

$example1 = new Example();
$example1 -> var2 = 'j';
$example1 -> setVar1('Guilherme');

echo $example1 -> getVar1();

echo "<br>" . "<br>";

echo $example -> var2;

echo "<br>";

echo $example1 -> var2;

echo "<br>" . "<br>";

// Example :: $var3 = 'another value'; // you can modify
echo Example :: $var3; // To access the static variable

echo "<br>";

Example :: func(); 