------------------------------
          LOCK TABLES            
------------------------------

<?php 

$pdo = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');

$sql = $pdo -> prepare(
    "SELECT * FROM `costumers`"
); 

$sql -> execute();

$users = $sql -> fetchAll();

foreach ($users as $key => $value)
    echo "<hr>" . $value['name'];