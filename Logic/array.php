<?php 
// 2 Arrays e vamos verificar os numeros em comum.
echo '[Header] = Repeated Values in 2 array:' . "<br> \n" . "<br> \n";

$arr_0 = [0, 1, 3, 4, 6, 8, 'Sup'];
$arr_1 = [10, 90, 23, 8, 6, 'Sup'];

// Rodar um looping e verificar se existe em um e no outro.
for ($i = 0; $i < count($arr_0); $i++) 
    for ($j = 0; $j < count($arr_1); $j++)
        if ($arr_0[$i] === $arr_1[$j]) {
            echo 'Solution using for Loops ' . $i . "<br> \n";

            $common[] = $arr_0[$i];
        }

echo "<br> \n";

echo 'Duplicated values => ';

foreach ($common as $key => $value)
    echo $value . ' ';
    
echo "<br> \n" . "<br> \n";

echo '[Header] = Repeated Values in a array:' . "<br> \n" . "<br> \n";

$arr_3 = [1, 0, 0, 1, 0, 1, 1];
$repeatedValues = [];

for ($i = 0; $i < count($arr_3); $i++) {
    $actualValue = $arr_3[$i];

    if (!isset($repeatedValues[$actualValue]))
        $repeatedValues[$actualValue] = 0;
    else
        $repeatedValues[$actualValue]++;
}

foreach ($repeatedValues as $key => $value)
    echo 'The value ' . $key . ' repeated ' . $value . ' times. ' . "<hr> \n";