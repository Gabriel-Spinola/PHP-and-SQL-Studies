<?php 

// if a class is final you cannot inherit it
// to inherit a class you need to use the extends

final class Son 
{
    public function printHello() {
        echo 'hallo world';
    }
}

class Father 
{
    public function showBye() {
        echo 'Bye World';
    }
}

$father = new Father;
$father -> showBye();

echo '<br />';

$son = new Son;
$son -> printHello();