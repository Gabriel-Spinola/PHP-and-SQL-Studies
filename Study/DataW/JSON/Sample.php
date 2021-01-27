<?php 

    $json = '{
        "a": 1,
        "b": {
            "0": "00",
            "1": "11"
        },
        "c": 3,
        "d": 4,
        "e": 5
    }';

    $obj = json_decode($json);
    $arr = json_decode($json, true);

    echo $obj -> a;
echo "<br>";
    echo $arr['a'];
echo "<br>";
    echo$arr['b']['0'];

echo "<br>" . "=========================================" . "<br>";

    $arr2 = [
        'nome' => 'guilherme',
        'cidade' => 'floripa'
    ];

    $json2 = json_encode($arr);

    echo $json2;
    
?>