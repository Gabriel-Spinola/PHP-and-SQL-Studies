<?php  

// to inherit a class you need to use the extends
class Son 
{
    public function printHello() {
        echo 'hallo world';
    }
}

class Father extends Son 
{
    public function showBye() {
        echo 'Bye World';
    }
}

$father = new Father;
$father -> showBye();

echo '<br>';

$father -> printHello();