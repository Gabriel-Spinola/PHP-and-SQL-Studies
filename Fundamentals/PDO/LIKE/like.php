----------------------------
          LIKE            
----------------------------

<?php 

$pdo = new PDO('mysql:host=localhost;dbname=pdo_study', 'root', '');

// %s = start with s, %s% = whatever s
$sql = $pdo -> prepare(
    "SELECT * FROM clients WHERE surname LIKE '%s%'"
);

$sql -> execute();

$surname = $sql -> fetchAll();

foreach ($surname as $key => $value)
    echo "<hr>" . $value['surname'];