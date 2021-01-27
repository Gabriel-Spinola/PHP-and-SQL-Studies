<?php

    // Protected you acces in fathers classes but not in other classes

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

?>