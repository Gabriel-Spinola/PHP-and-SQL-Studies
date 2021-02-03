<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>f1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    </head>

    <body>

        <?php 

            if(isset($_GET['action'])) {
                $name = $_GET['name'];
                $email = $_GET['email'];

                echo $name . "<br>";
                echo $email;
            }

            echo "<br>";
        ?>

        <br>

        <form>

            <input type="text" name="name"                 >
            <input type="text" name="email"                >
            <input type="submit" name="action" value="Send">

        </form>

        <br>
        <hr>

    </body>

</html>