<?php

/**
 * Type declarations for parameters and return values can
 * now be marked as nullable by prefixing the type name with a question
 * mark. This signifies that as well as the specified type, NULL can be
 * passed as argument, or returned as a value, respectively. 
*/

function testRun(): ?string {
    return 9;
}

var_dump(testRun()); // return string(1) "9".

function test(?string $number): mixed {
    return $number;
}

var_dump(test(16)); // return string(2) "16".