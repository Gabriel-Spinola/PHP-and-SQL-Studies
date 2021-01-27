<?php 
    /**
     *       Structure
     * |---------------------|
     * |=====tb_categoria====|
     * | categoria_id | nome |
     * |---------------------|
     * |======tb_filmes======|
     * |fime_categoria | nome|
     * |---------------------|
     * 
     * ========================================================
     * //////////                Content            ///////////
     * ========================================================
     * categoria_id = | 1  2 |      filme_categoria = | 1  2 |
     *                | t  c |                        |t1  c1|
     *                                                |t2  c2|
     * =========================================================
     * 
     * needs to categorize the films with subqueries
    */

    $pdo = new PDO('mysql:host=localhost;dbname=pdo4', 'root', '');

    $sql = $pdo -> prepare(
        // Query
       "SELECT * FROM tb_filmes 
        WHERE categoria_id = (
            /* Sub Query */ 
            SELECT categoria_id FROM tb_categoria
            WHERE nome = 'terror'
        );"
    );

    $sql -> execute();

echo "<pre>";
    var_dump($sql -> fetchAll());
echo "</pre>";

    $o = (function() {
        return 'a';
    });

    $o(function() {
        return 1;
    });

?>