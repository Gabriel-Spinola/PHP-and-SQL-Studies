----------------------------
        CREATE TABLE                     
----------------------------

<?php $pdo = new PDO('mysql:host=localhost;dbname=pdo4', 'root', '');

    /**
     * Create a table with the name "course"
     * 
     * with rows: 
     * id (that auto increment with each insertion),
     * firstname (text with a maximum of 30 words),
     * lastname (text with a maximum of 30 words)
     * lastname (text with a maximum of 60 words)
     * reg_date (get the current date time)
    */
    $sql = "CREATE TABLE course (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(60),
        reg_date TIMESTAMP
    );";

    $pdo -> exec($sql);

?>