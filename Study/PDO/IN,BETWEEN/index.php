<?php date_default_timezone_set('America/Sao_Paulo');

    $pdo = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');

    // %s = start with s, %s% = whatever s
    $sql = $pdo -> prepare(
        "SELECT * FROM clients WHERE id IN (11, 12, 15)"
    );

    $sql -> execute();

    $surname = $sql -> fetchAll();

    foreach ($surname as $key => $value)
        echo "<hr>" . $value['sobrenome'];

echo "<br><br>" . "=======================================================================" . "<br><br>";

    $pdo = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');

    // %s = start with s, %s% = whatever s
    $sql = $pdo -> prepare(
        "SELECT * FROM clients WHERE momento_registro BETWEEN '2020-11-19 23:11:47' AND '2020-11-19 23:15:21'"
    );

    $sql -> execute();

    $surname = $sql -> fetchAll();

    foreach ($surname as $key => $value)
        echo "<hr>" . $value['sobrenome'];

?>