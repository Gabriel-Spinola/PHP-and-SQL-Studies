<?php

    class Class1
    {
        function __construct(
            private string $name,
            private string $age
        ) { }

        function getName() {
            return $this -> name;
        }

        function getAge() {
            return $this -> age;
        }
    }

?>