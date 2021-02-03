------------------------------------------------------------------------------------
            GROUP           |       ORDER         |           LIMIT  
------------------------------------------------------------------------------------

<?php 

$pdo = new PDO('mysql:host=localhost;dbname=pdo_study2', 'root', ''); 
$pdo -> setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);


// ASC = increasing, DESC = decreasing.
$sql = $pdo -> prepare(
    "SELECT * FROM `costumers` GROUP BY title ORDER BY id ASC LIMIT 4"
); $sql -> execute();

$clientes = $sql -> fetchAll();

foreach ($clientes as $key => $value) {
    echo '<hr>' . 'value: ' . $value['name'] . '; title: ' . $value['title'] . '; id ' . $value['id'];
}