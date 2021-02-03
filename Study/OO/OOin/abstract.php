<?php 
    
    // An abstract class can only be inherited, it cannot be instantiated
    abstract class Test
    {
        public function func() {
            echo 'calling method';
        }

        abstract function func2();
    };

    class Main extends Test 
    {
        public function func2() {
            echo 'calling a abstract method';
        }

        public static function staticMethod() {
            echo 'Static Method';
        }

        public function method() {
            self :: staticMethod();
            echo " // Calling a Static method in a Public Method";
        }
    };

    $main = new Main;
    $main -> func();

    echo "<br>";

    $main -> func2();

    echo "<br>";

    $main :: staticMethod();

    echo "<br>";

    $main -> method();

?>