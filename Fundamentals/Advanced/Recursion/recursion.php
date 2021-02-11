<?php

/**
 * Recursion is a computer programming technique involving the use of a procedure,
 * subroutine, function, or algorithm that calls itself in a step having a termination condition so that    
 * successive repetitions are processed up to the critical step where the condition is met
*/

function test(): void {
    static $i = 0;

    echo 'testo' . ' ' . $i . ' ';

    $i++;

    if ($i < 3) {
        test();
    }
}

test();