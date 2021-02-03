--------------------------------------------------------
        LEFT JOIN         |         RIGHT JOIN
--------------------------------------------------------


<?php

$pdo = new PDO('mysql:host=localhost;dbname=pdo_study2', 'root', '');

// LEFT JOIN = always returns the value to its left, even if it is outside the ON instruction.
// LEFT JOIN = always returns the value to its right, even if it is outside the ON instruction.
// INNER JOIN = Returns only the values that match the ON Statement.
$sql = $pdo -> prepare(
    "SELECT * FROM `costumers` LEFT JOIN `titles` ON `costumers` . `title` = `titles` . `id`"
); 

$sql -> execute();

$costumers = $sql -> fetchAll();

foreach ($costumers as $key => $value) {
    echo '<hr>' . 'value: ' . $value['name'];
    echo ' | ' . $value['title_name'];
}