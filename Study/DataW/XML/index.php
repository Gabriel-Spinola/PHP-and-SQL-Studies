<?php

    $xml = simplexml_load_file('data.xml');

echo "<prev>";
    print_r($xml);
echo "</prev>";

echo "<br>" . '============================' . "<br>";

    echo $xml -> info -> items -> nome;

echo "<br><br>" . '========================================================' . "<br><br>";

    writeXML([
        'proceduralWrited',
        'bla' => 'blub',
        'foo' => 'bar',
        'another_array' => [
            'stack' => 'overflow'
        ]
    ], 'data2.xml');

    function writeXML($arr, $archName) {
        $xml2 = new SimpleXMLElement('<root/>');

        array_walk_recursive($arr, [$xml2, 'addChild']);
        file_put_contents($archName, $xml2 -> asXML());
    }
?>