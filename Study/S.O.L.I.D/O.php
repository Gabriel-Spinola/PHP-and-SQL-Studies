<?php

/**
 * OCP = Open Closed Principle
 * 
 * This principle says that objects and entities
 * must be opened for extension and closed for changes
 * 
 * Following the same pattern as the SPR principle,
 * here are two examples, the first is wrong and the second correct.
 * 
 * Google Definition
 * In object-oriented programming, the open–closed principle states "software entities (classes, modules, functions, etc.)
 * should be open for extension, but closed for modification"; that is, such an entity can allow its behaviour to be extended without modifying its source code.
*/

# First Example
class CLTContractEX
{
    public function wageEX() {/*...*/}
}

class StageEX
{
    public function benefitEX() {/*...*/}
}

class PayrollEX
{
    public float | int $balance = 0;

    public function calculateEX($contract) {
        if ($contract instanceof CLTContractEX) {
            $this -> balance = $contract -> wageEX();
        } 
        else if ($contract instanceof StageEX) {
            $this -> balance = $contract -> benefitEX();
        }
    }
}

# Second Example
interface Remunerable
{
    public function remuneration();
}

class CLTContract implements Remunerable
{
    public function remuneration() {/*...*/}
}

class PJContract implements Remunerable
{
    public function remuneration() {/*...*/}
}

class Stage implements Remunerable
{
    public function remuneration() {/*...*/}
}

class PayRoll
{
    protected $balance;

    public function calculate(Remunerable $contract) {
        $this -> balance = $contract -> remuneration();
    }
}