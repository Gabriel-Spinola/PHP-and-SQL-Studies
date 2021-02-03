-----------------------------
           UPDATE               
-----------------------------

<?php 

$pdo = new PDO('mysql:host=localhost;dbname=pdo_study', 'root', ''); 

/*
$sql = $pdo -> prepare(
    // updates the id 11 data
    "UPDATE `clients` SET name='V', surname='SS' WHERE id=$id"
                                                        if statement
);*/

$name1 = 'Gabriel'; $surname1 = 'Spinola';
$name2 = 'Mario'; $surname2 = 'Da Silva';

$sql = $pdo -> prepare(
    "UPDATE `clients` SET name=?, surname=?
    WHERE name=? AND surname=? OR name='V'"
);

if ($sql -> execute([$name1, $surname1, $name2, $surname2])) { 
    echo 'UPDATED'; 
}

echo "<br> <br>";

$id = 2;

$sql = $pdo -> prepare(
    "UPDATE `clients` SET name='Rogerio', surname='Oiregor' WHERE id=?"
);

if ($sql -> execute([$id])) { 
    echo 'UPDATED2'; 
}