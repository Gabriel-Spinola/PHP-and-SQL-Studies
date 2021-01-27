<?php 

// public - the property or method can be accessed from everywhere. This is default
// protected - the property or method can be accessed within the class and by classes derived from that class
// private - the property or method can ONLY be accessed within the class

    class Example
    {

        private $var1;
        public $var2;

        public static $var3 = 'static variable';

        public function method1() {

        }

        private function method2() {

        }

        public static function func() {
            echo 'static function';
        }

        public function setVar1($var1) {
            $this -> var1 = $var1; 
        }

        public function catchVar1() {
            return $this -> var1;
        }
        
    }

?>