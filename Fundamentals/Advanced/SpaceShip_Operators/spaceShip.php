<?php

// The spaceship operator is used for comparing two expressions
// Returning 1 if the left value is greater
// Returning -1 if the right value is greater
// Return 0 if the both have the same value

$foo = 10 <=> 8; // returns 1
$dib = 10 <=> 10; // returns 0
$bar = 8 <=> 10; // returns -1

echo $foo . "\n" . $dib . "\n" . $bar . "\n\n";

// Also works with strings

$mib = 'a' <=> 'z';

echo $mib;