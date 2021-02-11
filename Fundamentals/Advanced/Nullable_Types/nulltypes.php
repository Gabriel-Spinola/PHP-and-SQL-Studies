<?php

/**
 * Type declarations for parameters and return values can
 * now be marked as nullable by prefixing the type name with a question
 * mark. This signifies that as well as the specified type, NULL can be
 * passed as argument, or returned as a value, respectively. 
*/

$stringNumber;

function testRun(): ?string {
    return 9;
}

$stringNumber = testRun();

var_dump($stringNumber);