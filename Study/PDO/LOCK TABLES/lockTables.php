------------------------------
          LOCK TABLES            
------------------------------

<?php 

$pdo = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');

// lock the costumers table for 10 seconds
$pdo -> exec(
    "LOCK TABLES `costumers` WRITE
"); 

sleep(10);