----------------------------
          INSERT            
----------------------------

<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        
        <title>PDO Tests</title>

    </head>

    <body>
        
        <form method="post">

            <input type="text"   name="name"                required />
            <input type="text"   name="surname"             required />
            <input type="submit" name="action" value="send" required />

        </form>

    </body>
    
</html>

<?php

    date_default_timezone_set('your/region');
    $pdo = new PDO('mysql:host=hostname;dbname=databasename', 'user', 'password');

    if (isset($_POST['action'])) {
        # Get form data
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $date_time = date('Y-m-d H:i:s');

        # Submit the form data to the database
        // Insert into clients table
        $sql = $pdo -> prepare (
           "INSERT INTO `clients`
            VALUES (null, ?, ?, ?)"
        ); 

        // data
        $sql -> execute ([
            $name,
            $surname,
            $date_time
        ]);

        echo 'Query injected successfully';
    }

?>