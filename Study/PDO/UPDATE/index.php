<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=pdo', 'root', ''); 

    /*
    $sql = $pdo -> prepare(
        // updates the id 11 data
        "UPDATE `clients` SET nome='V', sobrenome='SS' WHERE id=$id"
                                                            if statement
    );*/

    {
        $nome1 = 'Gabriel'; $sobrenome1 = 'Spinola';
        $nome2 = 'Mario'; $sobrenome2 = 'Da Silva';
    }
    
    $sql = $pdo -> prepare(
        "UPDATE `clients` SET nome=?, sobrenome=?
        WHERE nome=? AND sobrenome=? OR nome='V'"
    );

    if (
        $sql -> execute(
            [$nome1, $sobrenome1, $nome2, $sobrenome2]
        )
    ) { echo 'UPDATED'; }

    echo "<br> <br>";

    $id = 11;

    $sql = $pdo -> prepare(
        "UPDATE `clients` SET nome='Rogerio', sobrenome='Oiregor' WHERE id=?"
    );

    if (
        $sql -> execute(
            [$id]
        )
    ) { echo 'UPDATED2'; }
?>