<?php

// Protected: you only can access in parent classes.
class Father 
{
    protected function func() {
        echo 'calling func';
    }

    public function printHello() {
        echo 'hallo world';
    }
}

class Son extends Father
{
    public function showBye() {
        echo 'Bye World';

        echo "<br />";

        $this -> func();
    }
}

$son = new Son;
$son -> showBye();