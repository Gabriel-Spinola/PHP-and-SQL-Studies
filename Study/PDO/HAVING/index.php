<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=pdo3', 'root', '');

    $select = $pdo -> prepare(
       "SELECT *
        FROM `tb_clientes`
        GROUP BY cargo
        HAVING pontos > 5"
    );

    $select -> execute();

echo "<pre>";
    var_dump($select -> fetchAll());
echo "</pre>";

?>