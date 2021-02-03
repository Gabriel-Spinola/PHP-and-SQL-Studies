----------------------------
          DELETE            
----------------------------

<?php $pdo = new PDO('mysql:host=localhost;dbname=pdo', 'root', ''); 

$id = 14;

// Delete all data blocks with id 14
$sql = $pdo -> prepare(
    "DELETE FROM `clients` WHERE id=?"
);

if ($sql -> execute([$id])) {
    echo 'DELETED';
}