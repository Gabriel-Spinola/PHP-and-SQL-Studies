<?php

$name = 'Gabriel';

function test() {
    global $name;

    echo $name;
}

test();