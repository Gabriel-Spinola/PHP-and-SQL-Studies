<?php $pdo = new PDO('mysql:host=localhost;dbname=pdo', 'root', ''); 

    
    // * = all columns
    // ´samplename´ = specified column
    $sql = $pdo -> prepare(
        "SELECT * FROM posts"
    );

    $sql -> execute();

    // receive all info
    $info = $sql -> fetchAll();

    
    echo "<pre>";
    print_r($info);
    echo "</pre>";
    
    echo "<br>" . "<hr>" . "<br>";
    
    foreach ($info as $key => $value) {
        echo 'Titulo: ' . $value['titulo'] . "<br>";
        echo 'Noticias: ' . $value['conteudo'] . "<hr>";
    }

    echo "<br>" . "<hr>" . "<h3>" . ' Using "for" ' . "</h3>" . "<hr>" . "<br>";

    for ($i = 0; $i < count($info); $i++) {
        echo 'Titulo: ' . $info[$i]['titulo'] . "<br>";
        echo 'Noticias: ' . $info[$i]['conteudo'] . "<hr>";
    }
    
    echo "<br> <br> <br>" . "<hr>";
echo '///////////////////////////////////Next Area///////////////////////////////////////';
    echo "<hr>" . "<br> <br> <br>";

    // * = all columns
    // ´samplename´ = specified column
    $sql = $pdo -> prepare(
        "SELECT * FROM posts WHERE categoria_id=?"
    );

    $sql -> execute([$_GET['categoria_id']]);

    // receive all info
    $info = $sql -> fetchAll();

    foreach ($info as $key => $value) {
        echo 'Titulo: ' . $value['titulo'] . "<br>";
        echo 'Noticias: ' . $value['conteudo'] . "<hr>";
    }

    echo "<br> <br> <br>" . "<hr>";
echo '///////////////////////////////////Next Area///////////////////////////////////////';
    echo "<hr>" . "<br> <br> <br>";

    // * = all columns
    // ´samplename´ = specified column
    $sql = $pdo -> prepare(
        "SELECT * FROM categorias"
    ); $sql -> execute();

    // receive all info
    $info = $sql -> fetchAll();

    foreach ($info as $key => $i) {
        $categoria_id = $i['id'];

        echo "<br>" . 'Exibindo posts de: ' . $i['nome'] . "<br> <br>";

        $sql = $pdo -> prepare(
            "SELECT * FROM posts WHERE categoria_id=$categoria_id"
        ); $sql -> execute();

        $infoPosts = $sql -> fetchAll();

        foreach ($infoPosts as $key => $j) {
            echo 'Titulo: ' . $j['titulo'] . "<br>";
            echo 'Noticias: ' . $j['conteudo'] . "<hr>";
        }
    }

    echo "<br> <br> <br>" . "<hr>";
echo '///////////////////////////////////Next Area///////////////////////////////////////';
    echo "<hr>" . "<br> <br> <br>";

    $sql = $pdo -> prepare(
        //   Connect two tables, Rename the post id and Create business rules
        "SELECT `posts`.*, `categorias`.*, `posts`.`id` AS `post_id` FROM `posts` 
        INNER JOIN `categorias` ON `posts`.`categoria_id`=`categorias`.`id`"
    ); $sql -> execute();

    $info = $sql -> fetchAll(PDO :: FETCH_ASSOC);

    echo "<pre>";
        print_r($info);
    echo "</pre>";

?>