<?php

/**
 * LSP = Liskov Substitution Principle
 * 
 * This principle says that a derived class
 * must be replaceable with its base class.
 * 
 * The First example already shows how class extensions should work
*/

# First Example
class AEX
{
    public function getName() {
        echo 'My Names is A';
    }
}

class BEX extends AEX
{
    public function getName() {
        echo 'My Names is B';
    }
}

$object1 = new AEX;
$object2 = new BEX;

function printName(AEX $object) {
    return $object -> getName();
}

printName($object1); // My Names is A.
printName($object2); // My Names is B.