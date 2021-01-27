<?php 

    echo "<hr />";

    $name = 'GAB';

    switch($name){
        case 'GAB':
            echo 'this variable is '.$name;
        break;
        case 'joao':
            echo 'this variables is joao';
        break;
    }echo "<br />"."<hr />"."<br />";

    echo "<hr />";

    for($i = 0; $i < 10; $i++){
        echo $i."<hr />";

        if($i == 5)
            break;
    }echo "<br />"."<br />";

    echo "<hr />";

    for($j = 0; $j < 10; $j++){
        if($j == 5)
            continue;
        echo $j."<hr />";
    }echo "<br />"."<br />";

    echo "<hr />";

    for($l = 0; $l < 10; $l++){
        if(($l == 5) || ($l == 9))
            continue;
        echo $l."<hr />";
    }

    //Break: for, while, do, foreach, switch and statements.
    //Continue: for, while, do, foreach and statements.

?>