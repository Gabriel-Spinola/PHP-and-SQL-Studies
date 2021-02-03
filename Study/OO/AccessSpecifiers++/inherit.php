<?php  

// to inherit a class you need to use the extends
class Father 
{
    /**
     * @return string
     * 
     * Print "hallo, world"
    */
    public function printHello() {
        echo 'hallo, world';
    }
}

class Son extends Father 
{
    public function printBye() {
        echo 'Bye World';
    }
}

$son = new Son;
$son -> printBye();

echo '<br>';

$son -> printHello();