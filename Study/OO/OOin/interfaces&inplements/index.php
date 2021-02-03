<?php 

include('interface.php');

class Test implements interface1
{
    public function print($par) {
        echo $par;
    }
}

$test = new Test;
$test -> print('hallo world');