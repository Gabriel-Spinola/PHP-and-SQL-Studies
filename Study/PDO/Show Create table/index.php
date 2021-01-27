<?php $pdo = new PDO('mysql:host=localhost;dbname=pdo4', 'root', '');

    $sql = "CREATE TABLE curse (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(60),
        reg_date TIMESTAMP
    );";

    $pdo -> exec($sql);

?>