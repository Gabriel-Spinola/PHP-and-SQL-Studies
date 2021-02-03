<?php 

// if a class is final you cannot inherit it
// to inherit a class you need to use the extends
final class Father
{
    /**
     * @return string
     * 
     * Print "hallo, world"
    */
    public function printHello() {
        echo 'hallo world';
    }
}

class Son
{
    /**
     * @return string
     * 
     * Print "hallo, world"
    */
    public function showBye() {
        echo 'Bye World';
    }
}

$son = new Son;
$son -> showBye();

echo '<br />';

$father = new Father;
$father -> printHello();