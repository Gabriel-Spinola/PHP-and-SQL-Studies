------------------------------
          LOCK TABLES            
------------------------------

<?php 

$pdo = new PDO('mysql:host=localhost;dbname=pdo_study', 'root', '');

// lock the costumers table for 10 seconds
$pdo -> exec(
    "LOCK TABLES `clients` WRITE
"); 

sleep(10);