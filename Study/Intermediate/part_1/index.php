<?php 



?>

<!DOCTYPE html>
<html lang = "en">

    <head>              
    
        <meta charset = "UTF-8">

        <title>Intermediate PHP</title>

    </head>

    <body>

        <!--region Conditions--->

            <?php   
                $var_1 = 'G';
                $var_2 = 'A';

                if($var_1 == $var_2){
                    echo
                        '<div style =
                            "width: 300px;
                            height: 300px;
                            background: red;">
                        </div>'
                    ;
                }else{
                    echo 'A condição não bate'.'<br />';
                };
                if($var_1 != $var_2){
            ?>

            <p> oi </p>

            <?php
                } else {
            ?>

                <!DOCTYPE html>
                <html lang = "en">

                    <head>

                        <meta charset = "UTF-8">
                        <title>01</title>

                    </head>

                    <body>

                        <p>ooo</p>

                    </body>

                </html>

                <?php
                };
            ?> 

            <?php
                
                $var1 = 10 + 5;
                $var2 = 10 + 5;
                
                if($var1 == $var2) {
                    echo 'True'.'<br />';
                } else if($var1 != 15) {
                    echo 'Bool'.'<br />';
                } else {
                    echo 'False'.'<br />';
                };
            ?>
        <!--endregion--->
        
        <!--region Loopings--->

            <?php
                for($i = 0; $i < 10; $i++) {
                   echo 'Ola mundo for'."<hr />"."<br />";
                };

                $i = 0;
               
                while($i < 10){
                   echo 'Ola mundo while'."<hr />"."<br />";
                   $i++;
                };

                $i = 11;
                
                do{
                    echo 'Ola mundo do'."<br />";
                }while($i == 10);
            ?>

        <!--endregion--->
    
    </body>

</html>