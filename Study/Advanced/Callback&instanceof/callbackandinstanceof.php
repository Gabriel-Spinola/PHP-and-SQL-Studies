<?php

echo "==== Instanceof ====\n";

class A {

}

class B {

}

$a = new A;
$b = new B;

if ($a instanceof A) {
    echo '$a ref A class';
}

echo "\n==== Callback ====\n";

function execute($b, $a = 'Foo') {
    if ($b instanceof Closure) {
        $b($a);
    }
}

execute(function($name) {
    echo 'Hello, ' . $name;
});