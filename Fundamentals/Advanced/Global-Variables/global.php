<?php

$name = 'foo'; // global scope

function test(): void {
    // get global scope variables
    global $name;

    $i = 1; // local scope

    echo $name;
}

test();

// Works with classes the same way
class Test {
    function __construct()
    {
        global $name;

        echo $name;
    }
}

new Test;