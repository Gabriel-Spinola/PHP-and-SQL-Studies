<?php

$test = 'Gabriel';

// if the test variable has the expression "iel" echo true
if (preg_match('/iel/', $test)) {
    echo 'true';
}

echo "\n====\n";

// just use the question mark when you know what comes next
preg_match('/(.*?)bri(.*)/', $test, $request);
echo $request[0];