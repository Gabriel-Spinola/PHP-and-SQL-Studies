<?php 

include('magicMethods.php');

$class1 = new Class1(name: 'gui', age: 14);

echo $class1 -> getName() . ' ' . "\n";
echo $class1 -> getAge();