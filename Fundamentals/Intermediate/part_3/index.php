<?php
    /**
     * # Source From W3School
     * 
     * PHP Built-in Functions:
     * PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.
     * 
     * Please check out our PHP reference for a complete overview of the PHP built-in functions.
     * 
     * PHP User Defined Functions:
     * Besides the built-in PHP functions, it is possible to create your own functions.
     * 
     * A function is a block of statements that can be used repeatedly in a program.
     * A function will not execute automatically when a page loads.
     * A function will be executed by a call to the function.
     * Create a User Defined Function in PHP
     * A user-defined function declaration starts with the word function:
     * 
     * Syntax:
     * 
     * function functionName() {
     *    code to be executed;
     * }
    */

    $var = 'value';

    /**
     * @return text 
    */
    function showName(string $name, string $age): void {
        echo "<h2>The Name is: </h2>" . $name . "<hr>";
        echo "The age is {$age}" . "<br>" . "<hr>";
    }

    ShowName('Joao', 20);

    /**
     * @return calc-result 
     * @param optional-number
     * @param optional-number
    */
    function calc(int | float $number1 = 10, int | float $number2 = 5): void {
        echo $number1 + $number2."<br>" . "<br>";
    }

    calc(20);

    /**
     * @return bool 
    */
    function true(): bool {
        return true;
    }

    $var2 = true();

    /**
     * @return string 
    */
    function returnString(): string {
        return 'O' . "<br>" . "<br>";
    }

    echo returnString();

    // ====================================================

    date_default_timezone_set('America/Sao_Paulo');

    $data = date('d/m/Y', time() + (60)); // Brazil format

    $hour = date('H:i:s');

    echo $data . ' ' . $hour;

    echo "<br>" . "<br>" . "<br>" . "<br>";

?>

<?php 

    $SITE_TITLE = 'STD Part 3';

    include('header.php');

?>

<h1>Home Content</h2>

<?php 

    include('footer.php');

?>