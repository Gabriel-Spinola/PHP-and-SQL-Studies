------------------------------------------------------------------------------------
            GROUP           |       ORDER         |           LIMIT  
------------------------------------------------------------------------------------

          

<?php 

$pdo = new PDO('mysql:host=localhost;dbname=pdo2', 'root', ''); 
$pdo -> setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);


// ASC = crescente, DESC = decrecente.
$sql = $pdo -> prepare(
    "SELECT * FROM `clientes` GROUP BY cargo ORDER BY id ASC LIMIT 4"
); $sql -> execute();

$clientes = $sql -> fetchAll();

foreach ($clientes as $key => $value) {
    echo '<hr>' . 'value: ' . $value['nome'] . '; cargo: ' . $value['cargo'] . '; id ' . $value['id'];
}

// LEFT JOIN = always returns the value to its left, even if it is outside the ON instruction.
// LEFT JOIN = always returns the value to its right, even if it is outside the ON instruction.
// INNER JOIN = Returns only the values that match the ON Statement.
$sql = $pdo -> prepare(
    "SELECT * FROM `costumers` LEFT JOIN `title` ON `costumers` . `title` = `title` . `id`"
); $sql -> execute();

$clientes = $sql -> fetchAll();

foreach ($clientes as $key => $value) {
    echo '<hr>' . 'value: ' . $value['nome'];
    echo ' | ' . $value['title_name'];
}