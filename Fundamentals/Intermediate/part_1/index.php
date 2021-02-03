<?php  

/**
 * PHP Conditional Statements
 * Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

 * In PHP we have the following conditional statements:

 * if statement - executes some code if one condition is true
 * if...else statement - executes some code if a condition is true and another code if that condition is false
 * if...elseif...else statement - executes different codes for more than two conditions
 * switch statement - selects one of many blocks of code to be executed
 * 
 * 
 * Syntax:
 * 
 * if (condition) {
 *    code to be executed if condition is true;
 * }
 * 
 * if (condition) {
 *     code to be executed if condition is true;
 * } else {
 *     code to be executed if condition is false;
 * }
 * 
 * if (condition) {
 *     code to be executed if this condition is true;
 * } elseif (condition) {
 *     code to be executed if first condition is false and this condition is true;
 * } else {
 *     code to be executed if all conditions are false;
 * }
*/

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}

// ...

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

// ...

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

// ...

$var_1 = 'G';
$var_2 = 'A';

if($var_1 == $var_2) {
    echo
        '<div style =
            "width: 300px;
            height: 300px;
            background: red;">
        </div>'
    ;
} else {
    echo "the condition doesn't match" .'<br>';
}

?>

<?php if($var_1 != $var_2) { ?>

    <p> oi </p>

<?php } else { ?>

    <!DOCTYPE html>
    <html lang = "en">

        <head>

            <meta charset = "UTF-8">
            <title>01</title>

        </head>

        <body>

            <p>ooo</p>

        </body>

    </html>

<?php } ?> 

<?php

/**
 * The PHP switch Statement
 * Use the switch statement to select one of many blocks of code to be executed.
 * 
 * Syntax
 * switch (n) {
 *   case label1:
 *     code to be executed if n=label1;
 *     break;
 * 
 *   case label2:
 *     code to be executed if n=label2;
 *     break;
 * 
 *   case label3:
 *     code to be executed if n=label3;
 *     break;
 *     ...
 *   default:
 *     code to be executed if n is different from all labels;
 * }
 * 
 * This is how it works: First we have a single expression n (most often a variable), that is evaluated once.
 * The value of the expression is then compared with the values for each case in the structure.
 * If there is a match, the block of code associated with that case is executed. Use break to prevent the code from running into the next case automatically.
 * The default statement is used if no match is found.
*/

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;

    case "blue":
        echo "Your favorite color is blue!";
        break;

    case "green":
        echo "Your favorite color is green!";
        break;
        
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

/**
 * In the following chapters you will learn how to repeat code by using loops in PHP.
 *
 *  PHP Loops
 * Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we   * can use loops.
 * 
 * Loops are used to execute the same block of code again and again, as long as a certain condition is true.
 *
 * In PHP, we have the following loop types:

 * while - loops through a block of code as long as the specified condition is true
 * do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
 * for - loops through a block of code a specified number of times
 * foreach - loops through a block of code for each element in an array
 * The following chapters will explain and give examples of each loop type.
 * 
 * Example:
 * 
 * The while loop executes a block of code as long as the specified condition is true.
 * while (condition is true) {
 *    code to be executed;
 * }
 * 
 * The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.
 * do {
 *   code to be executed;
 * } while (condition is true);
 * 
 * The for loop is used when you know in advance how many times the script should run.
 * for (init counter; test counter; increment counter) {
 *   code to be executed for each iteration;
 * }
 * 
 * The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
 * foreach ($array as $value) {
 *    code to be executed;
 * }
*/
    
$x = 0;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}


$y = 1;

do {
  echo "The number is: $y <br>";
  $y++;
} while ($y <= 5);


for ($i = 0; $i <= 10; $i++) {
    echo "The number is: $i <br>";
}


$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}