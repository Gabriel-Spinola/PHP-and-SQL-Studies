-----------------------------
         SUBQUERIES               
-----------------------------

<?php 
/**
 *       Structure
 * |---------------------|
 * |=====tb_category====|
 * | category_id | name |
 * |---------------------|
 * |======tb_movies======|
 * |movie_category | name|
 * |---------------------|
 * 
 * ========================================================
 * //////////                Content            ///////////
 * ========================================================
 * category_id = | 1  2 |      movie_category = | 1  2 |
 *               | t  c |                       |t1  c1|
 *                                              |t2  c2|
 * =========================================================
 * 
 * needs to categorize the films with subqueries
*/

$pdo = new PDO('mysql:host=localhost;dbname=pdo_study4', 'root', '');

$sql = $pdo -> prepare(
    // Query
    "SELECT * FROM tb_movies 
    WHERE category_id = (
        /* Sub Query */ 
        SELECT category_id FROM tb_category
        WHERE `name` = 'horror'
    );"
);

$sql -> execute();

echo "<pre>";
var_dump($sql -> fetchAll());
echo "</pre>";