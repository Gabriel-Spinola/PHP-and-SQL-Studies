<?php

// Protected: you only can access in parent classes.
class Son 
{

    protected function func() {
        echo 'calling func';
    }

    public function printHello() {
        echo 'hallo world';
    }

};

class Father extends Son
{

    public function showBye() {
        echo 'Bye World';

        echo "<br />";

        $this -> func();
    }

};

$father = new Father; 
$father -> showBye();