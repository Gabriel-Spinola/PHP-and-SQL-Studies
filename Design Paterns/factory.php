<?php 

/**
 * A Factory Pattern or Factory Method Pattern says that just define an interface
 * or abstract class for creating an object but let the subclasses decide which class to instantiate.
 * In other words, subclasses are responsible to create the instance of the class.
*/

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