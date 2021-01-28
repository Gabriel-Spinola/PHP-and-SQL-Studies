<?php

$test = 'Gabriel';

// if the test variable has the expression "iel" echo true
if (preg_match('/iel/', $test)) {
    echo 'true';
}

echo "<br>================<br>";

// just use the question mark when you know what comes next
preg_match('/(.*?)bri(.*)/', $test, $request);

echo "<pre>";
var_dump($request);
echo "</pre>";

echo "<br>========CPF Validation=======<br>";

if (isset($_POST['submit'])) {
    $cpf = $_POST['cpf'];

    if (isCPFValid($cpf)) {
        echo 'true';
    } else {
        echo 'false';
    }
}

function isCPFValid(string $cpf): bool {
    // CPF Format: 000.000.000-00;

    $expression = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/'; // [0-9a-z*/._-=!,-+]

    return preg_match($expression, $cpf);
}

?>

<form method="post">

    <input type="text" name="cpf">
    <input type="submit" name="submit">

</form>