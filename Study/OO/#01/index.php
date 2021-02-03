<?php 

class Human
{

    public $name = 'Gabriel';
    private $age = '23';
    private $weight = '70kg';

    private function eat() {
        echo 'eating';
    }

    public function grow() {
        echo 'growing up';
        echo "<br />";
        
        $this -> eat(); // calling a private function
    }

}

// instantiate
$Human = new Human; // now the Human variable has access to the Human class


$Human -> grow();