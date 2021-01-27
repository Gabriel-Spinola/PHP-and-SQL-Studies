<?php date_default_timezone_set('America/Sao_Paulo'); $pdo = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');

    if (isset($_POST['action'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');

        $sql = $pdo -> prepare (
            "INSERT INTO `clients` VALUES (null, ?, ?, ?)"
        ); 
        $sql -> execute (
            array($nome, $sobrenome, $momento_registro)
        );

        echo 'Query injected successfully';
    }
?>

<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        
        <title>PDO Tests</title>

    </head>

    <body>
        
        <form method="post">

            <input type="text"   name="nome"                required />
            <input type="text"   name="sobrenome"           required />
            <input type="submit" name="action" value="send" required />

        </form>

    </body>
    
</html>