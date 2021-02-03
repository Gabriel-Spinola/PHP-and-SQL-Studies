<?php 

include('interface.php');

class Test implements interface1
{
    /**
     * @return string
    */
    public function print($text) {
        echo $text;
    }
}

$test = new Test;
$test -> print(text: 'hallo world');