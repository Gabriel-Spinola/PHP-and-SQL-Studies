<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');

    // lock the clients table for 10 seconds
    $pdo -> exec(
        "LOCK TABLES `clients` WRITE"
    ); sleep(10);

?>