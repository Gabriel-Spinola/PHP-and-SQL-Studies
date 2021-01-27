<?php

$type = 'integer';

echo "\n var_dump with ... \n" . '================================' . "\n\n";

var_dump(...(function() use($type) {
    return $type == 'integer' ? [1, 2, 3] : ($type == 'alphabet' ? ['a', 'b', 'c'] : throw new \InvalidArgumentException);
}) ());

echo "\n var_dump without ... \n" . '================================' . "\n\n";

var_dump(...(function() use($type) {
    return $type == 'integer' ? [1, 2, 3] : ($type == 'alphabet' ? ['a', 'b', 'c'] : throw new \InvalidArgumentException);
}) ());

echo "\n other examples \n" . '================================' . "\n\n";

echo (function($a, $b) {
    return $a . $b;
}) (a: 'o', b: 'i') . "\n\n";


if ((function() { return true; }) ()) {
    echo 'true 1' . "\n";
}

if ((function($a, $b) use($type) {
    return $type == 'integer' && isset($a) || isset($b) ? true : ($type == 'alphabet' ? false : throw new \InvalidArgumentException);
}) (a: 'a', b: 'b',)) {
    echo 'true 2';
}

echo "================================";