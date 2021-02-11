<?php

$name = 'John';

function Test(string &$arg) {
    $arg = 'Jorge';
}

Test($name);

echo $name;