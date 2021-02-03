-----------------------------
         INNER JOIN              
-----------------------------

<?php

$pdo = new PDO('mysql:host=localhost;dbname=pdo_study', 'root', '');

$sql = $pdo -> prepare(
    // Connect both tables and rename the post id (following the "ON" rules)
    "SELECT `posts`.*, `categories`.*, `posts`.`id` AS `post_id` FROM `posts` 
    INNER JOIN `categories` ON `posts`.`categories_id`=`categories`.`id`"
); $sql -> execute();

// Return each row fetched in a new array
$info = $sql -> fetchAll(PDO :: FETCH_ASSOC);

echo "<pre>";

    print_r($info);

echo "</pre>";