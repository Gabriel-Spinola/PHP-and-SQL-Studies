<?php

// Closure is a Class used to represent anonymous functions
// instanceof is used to determine whether a PHP variable is an instantiated object of a certain class

echo "==== Instanceof ====\n";

class A {

}

class B {

}

$a = new A;
$b = new B;

if ($a instanceof A) {
    echo '$a reference the "A" class';
}

echo "\n==== Callback ====\n";

function execute($b, $a = 'Foo'): void {
    if ($b instanceof Closure) {
        $b($a);
    }
}

execute(function($name): void {
    echo 'Hello, ' . $name;
});