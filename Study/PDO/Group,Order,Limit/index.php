<?php 
$pdo = new PDO('mysql:host=localhost;dbname=pdo2', 'root', ''); 
$pdo -> setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);

/*
    // ASC = crescente, DESC = decrecente.
    $sql = $pdo -> prepare(
        "SELECT * FROM `clientes` GROUP BY cargo ORDER BY id ASC LIMIT 4"
    ); $sql -> execute();

    $clientes = $sql -> fetchAll();

    foreach ($clientes as $key => $value) {
        echo '<hr>' . 'value: ' . $value['nome'] . '; cargo: ' . $value['cargo'] . '; id ' . $value['id'];
    }
*/

    // LEFT JOIN = sempre retorna o valor a sua esquerda mesmo que esteja fora do ON Statement.
    // RIGHT ___ = _____ _______ _ ____ _ ____ direita  _____ ___ ______ ____ __ __ __________
    // INNER ___ = Retorna somento os valores que batem com o ON Statement.
    $sql = $pdo -> prepare(
        "SELECT * FROM `clientes` LEFT JOIN `cargos` ON `clientes` . `cargo` = `cargos` . `id`"
    ); $sql -> execute();

    $clientes = $sql -> fetchAll();

    foreach ($clientes as $key => $value) {
        echo '<hr>' . 'value: ' . $value['nome'];
        echo ' | ' . $value['nome_cargo'];
    }
?>