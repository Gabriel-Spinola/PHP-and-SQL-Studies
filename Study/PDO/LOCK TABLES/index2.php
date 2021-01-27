<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');

    $sql = $pdo -> prepare(
        "SELECT * FROM `clients`"
    ); $sql -> execute();

    $users = $sql -> fetchAll();

    foreach ($users as $key => $value) {
        echo "<hr>" . $value['nome'];
    }

?>