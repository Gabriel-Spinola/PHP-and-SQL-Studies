<?php

/**
 * I recommend reading the PHP documentation for this (: 
*/

$str = '<div>
<h2>Hallo World!</h2>
</div>';

// the "s" letter detect rows break
preg_match('/(.*)/s', $str, $matches);

echo htmlentities($matches[0]);

echo "<br>===========2°=============<br>";

// the "s" letter detect rows break
preg_match('/<div>(.*?)<\/div>/s', $str, $matches);

echo htmlentities($matches[1]);

echo "<br>===========3°=============<br>";

$str = '<div>
<h2>Hallo World!</h2>
</div><div><h2>2222</h2></div>';

preg_match_all('/<div>(.*?)<\/div>/s', $str, $matches);

print_r($matches);

echo "<br>===========4°=============<br>";

$str = '<div>
<h2>Hallo World!</h2>
</div><div><h2>Hallo Again!</h2></div>';

preg_match_all('/<div>(.*?)<\/div>/s', $str, $matches);
 
echo htmlentities($matches[0][0]);

echo "<br>===========5°=============<br>";

$str = '<div class="test">
<h2>Hallo World!</h2>
</div><div class="test2"><h2>Hallo Again!</h2></div>';

preg_match_all('/<div class="(.*?)">(.*?)<\/div>/s', $str, $matches);
 
echo '1°: ' . htmlentities($matches[0][0]) . "<br>";
echo '2°: ' . htmlentities($matches[1][0]) . "<br>";
echo '3°: ' . htmlentities($matches[2][0]) . "<br>";
echo '4°: ' . htmlentities($matches[0][1]) . "<br>";
echo '5°: ' . htmlentities($matches[1][1]) . "<br>";
echo '6°: ' . htmlentities($matches[2][1]) . "<br>";

echo "<br>===========6°=============<br>";

$str = 'Gui
ok';

// the "i" letter turns off case sensitivity
echo preg_match('/gui\\r\\n/si', $str) ? 'true' : 'false';