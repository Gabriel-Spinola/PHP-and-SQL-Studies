----------------------------
          HAVING            
----------------------------

<?php 

$pdo = new PDO('mysql:host=localhost;dbname=pdo_study3', 'root', '');

// group all customers by title and select those who have more than 5 points
$select = $pdo -> prepare(
   "SELECT * FROM `tb_costumers`
    GROUP BY title
    HAVING points > 5"
);

$select -> execute();

echo "<pre>";
var_dump($select -> fetchAll());
echo "</pre>";