<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title></title>

    </head>

    <body>

        <?php
            #region Foreach and for[]

                $helloWorld = ['H' , '-' , 'E' , '-' , 'L' , '-' , 'L' , '-' , 'O'];
                $string = '';

                for($i = 0; $i < count($helloWorld); $i++){
                    if($helloWorld[$i] == '-'){
                        continue;
                    };
                    $string.=$helloWorld[$i];
                }echo "<br />";
                
                echo $string."<br />"."<hr />"."<br />";

                $arr = ['key1' => 'Guilherme' , 'João' , 'Felipe' , 'Mario'];

                foreach($arr as $key => $value){
                    echo $key;
                    echo '=>';
                    echo $value;
                    echo "<hr />"."<br />";
                };
                
                $arr1 = array('G' , 'J' , 'F' , 'M');

                $total = count($arr1);

                for($i = 0; $i < $total; $i++){
                    echo $arr1[$i]."<hr />"."<br />";
                }"<br />";

                echo 'oi'."<br />"."<br />";

            #endregion
            
            #region multidimensional arrays

                $arr2 = array(array('Guilherme' , 'Jão'), array(23 , 45));

                echo $arr2[0][0]."<br />"."<br />";

            #endregion

            #region Die & Sleep

                /*
                    sleep(3);
                    echo 'one';

                    sleep(3);
                    echo 'two';
                    
                    sleep(3);
                    echo 'third';
                */

                $nome = 'joao';

                if($nome == 'joao'){
                    echo 'tudo certo';
                }else{
                    die('Stopped');
                };

            #endregion
        ?>

    </body>

</html>










GAY