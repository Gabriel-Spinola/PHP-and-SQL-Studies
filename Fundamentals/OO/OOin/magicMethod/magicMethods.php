<?php

class Class1
{
    function __construct(
        private string $name,
        private string $age
    ) { }
    
    /**
     * @return string
     * 
     * Used to get the name variable
    */
    function getName() {
        return $this -> name;
    }

        /**
     * @return string
     * 
     * Used to get the age variable
    */
    function getAge() {
        return $this -> age;
    }
}