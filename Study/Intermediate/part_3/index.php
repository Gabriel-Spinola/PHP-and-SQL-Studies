<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <?php

            $var = 'value';

            /**
             * @return text 
            */
            function showName($name, $age) {
                echo "<h2>The Name is: </h2>" . $name . "<hr>";
                echo "The age is {$age}" . "<br>" . "<hr>";
            }

            ShowName('Joao', 20);

            /**
             * @return calc-result 
            */
            function calc($number1 = 10, $number2 = 5) {
                echo $number1 + $number2."<br>" . "<br>";
            }

            calc(20);

            function true() {
                return true;
            }

            $var2 = true();

            function returnString() {
                return 'O' . "<br>" . "<br>";
            }

            echo returnString();

            // ====================================================

            date_default_timezone_set('America/Sao_Paulo');

            $data = date('d/m/Y', time() + (60)); // Brazil format

            $hour = date('H:i:s');

            echo $data . ' ' . $hour;

            echo "<br>" . "<br>" . "<br>" . "<br>";

        ?>

        <?php 

            $SITE_TITLE = 'STD Part 3';

            include('header.php');

        ?>

        <h1>Home Content</h2>

        <?php 

            include('footer.php');

        ?>
        
    </body>

</html>