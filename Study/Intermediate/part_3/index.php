<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <?php
            #Creating Functions >->

                $var = 'value';

                function showName($nome, $idade) {
                    echo "<h2>Nome é: </h2>".$nome."<hr />";
                    echo "A idade é {$idade}"."<br />"."<hr />";
                }

                ShowName('Joao', 20);

                function calc($number1 = 10, $number2 = 5) {
                    echo $number1 + $number2."<br />"."<br />";
                }

                calc(20);

                function true() {
                    return true;
                }

                $var2 = true();

                function returnString() {
                    return 'O'."<br />"."<br />";
                }

                echo returnString();

            #Pragma End --<

            #Native Function >->

                date_default_timezone_set('America/Sao_Paulo');

                $data = date('d/m/Y', time() + (60)); // Brazil format
                $hour = date('H:i:s');
                echo $data.' '.$hour."<br />"."<br />"."<br />"."<br />";

            #Pragma End --<
        ?>

        <!--Cross File Region Include Example #pragma NF---> 

            <?php 
                $SITE_TITLE = 'STD Part 3';

                include('header.php');
            ?>

            <h1>Meu conteudo da home</h2>

            <?php 
                include('footer.php');
            ?>
        
    </body>

</html>