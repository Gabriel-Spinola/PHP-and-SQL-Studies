<?php

/** 
 * Basically, the static keyword causes that with each function call,
 * the variable "n" is increased and not redeclared like normal variables.
 * 
*/

echo "=============Normal================\n";

function normal() {
    $n = 0;
    $n++;

    return $n;
}

echo normal() . "\n";
echo normal() . "\n";

echo "=============Static Keyword================\n";

function staticKeyword() {
    static $n = 0;
    $n++;

    return $n;
}

echo staticKeyword() . "\n";
echo staticKeyword() . "\n";

echo "=============Static Keyword in Classes================\n";

class Test {
    public function test() {
        static $n = 0;
        $n++;

        return $n;
    }
}

$t = new Test;

echo $t -> test() . "\n";
echo $t -> test() . "\n";