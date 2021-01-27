<?php 

class Dog
{
    function __construct() {
        echo 'Dog Class';
    }
}

class Cat
{
    function __construct() {
        echo 'Cat CLass';
    }
}

class Animals
{
    static function build($className) {
        if (class_exists($className)) {
            return new $className;
        } else {
            die("this class don't exist");
        }
    }
}

Animals :: build('Dog');