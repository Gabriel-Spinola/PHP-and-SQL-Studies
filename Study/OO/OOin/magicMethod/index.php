<?php 

    include('magicMethods.php');

    $class1 = new Class1('gui', 14);

    echo $class1 -> getName() . ' ' . "\n";
    echo $class1 -> getAge();

?>