<?php

// Self Explanatory.

function test() {
    static $i = 0;

    echo 'testo' . ' ' . $i . ' ';

    $i++;

    if ($i < 3) {
        test();
    }
}

test();