--------------------------------------------------------
        LEFT JOIN         |         RIGHT JOIN
--------------------------------------------------------


<?php

// LEFT JOIN = always returns the value to its left, even if it is outside the ON instruction.
// LEFT JOIN = always returns the value to its right, even if it is outside the ON instruction.
// INNER JOIN = Returns only the values that match the ON Statement.
$sql = $pdo -> prepare(
    "SELECT * FROM `costumers` LEFT JOIN `titles` ON `costumers` . `title` = `title` . `id`"
); 

$sql -> execute();

$clientes = $sql -> fetchAll();

foreach ($clientes as $key => $value) {
    echo '<hr>' . 'value: ' . $value['nome'];
    echo ' | ' . $value['title_name'];
}