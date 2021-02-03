--------------------------------------------------------
            IN              |         BETWEEN
--------------------------------------------------------

<?php date_default_timezone_set('America/Sao_Paulo');

$pdo = new PDO('mysql:host=localhost;dbname=pdo_study', 'root', '');

// SELECT ALL clients with id in 11, 12, 15
$sql = $pdo -> prepare(
    "SELECT * FROM clients WHERE id IN (4, 5, 8)"
);

$sql -> execute();

$surname = $sql -> fetchAll();

foreach ($surname as $key => $value)
    echo "<hr>" . $value['surname'];

echo "<br><br>" . "=======================================================================" . "<br><br>";

// SELECT ALL clients with register_moment BETWEEN 2020-11-19 23:11:47 AND 2020-11-19 23:15:21
$sql = $pdo -> prepare(
    "SELECT * FROM clients WHERE register_moment BETWEEN '2021-02-03 14:01:49' AND '2021-02-03 14:01:08'"
);

$sql -> execute();

$surname = $sql -> fetchAll();

foreach ($surname as $key => $value)
    echo "<hr>" . $value['surname'];