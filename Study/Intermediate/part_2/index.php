<?php

/**
 * PHP Break
 * You have already seen the break statement used in an earlier chapter of this tutorial. It was used to "jump out" of a switch statement.
 *
 * The break statement can also be used to jump out of a loop.
*/

for ($i = 0; $i < 10; $i++) {
    if ($i == 4) {
        break;
    }

    echo "The number is: $i <br>";
}

echo "<br><br>";

/**
 * An array stores multiple values in one single variable:
 * 
 * // The array index can be assigned automatically (index always starts at 0), like this: 
 * 
 * $cars[0] = "Volvo";
 * $cars[1] = "BMW";
 * $cars[2] = "Toyota";
*/

//               0       1       2
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "." . "<br>";

// The count() function is used to return the length (the number of elements) of an array:
echo count($cars);

echo "<br><br>";

// To loop through and print all the values of an indexed array, you could use a for loop, like this:
$arrLength = count($cars);

for($x = 0; $x < $arrLength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

// Associative arrays are arrays that use named keys that you assign to them.
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo "<br><br>";

/**
 * A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).
 *
 * First, take a look at the following table:
 *
 *  Name	Stock	Sold
 *  Volvo	22	18
 *  BMW	15	13
 *  Saab	5	2
 *  Land Rover	17	15
 * 
 * We can store the data from the table above in a two-dimensional array, like this:
 *
 * $cars = array (
 *    array("Volvo",22,18),
 *    array("BMW",15,13),
 *    array("Saab",5,2),
 *    array("Land Rover",17,15)
 * );
 * 
 * Now the two-dimensional $cars array contains four arrays, and it has two indices: row and column.
 * 
 * To get access to the elements of the $cars array we must point to the two indices (row and column):
*/

$cars2 = array (
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

echo $cars2[0][0].": In stock: ".$cars2[0][1].", sold: ".$cars2[0][2].".<br>";
echo $cars2[1][0].": In stock: ".$cars2[1][1].", sold: ".$cars2[1][2].".<br>";
echo $cars2[2][0].": In stock: ".$cars2[2][1].", sold: ".$cars2[2][2].".<br>";
echo $cars2[3][0].": In stock: ".$cars2[3][1].", sold: ".$cars2[3][2].".<br>";

// We can also put a for loop inside another for loop to get the elements of the $cars array (we still have to point to the two indices):
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";

    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars2[$row][$col]."</li>";
    }
    
    echo "</ul>";
}

echo "<br>" . "<br>";


/** 
 * PHP Sleep function
 * 
 * just delays the script execution (in seconds)
*/

/*
sleep(3);

echo 'one';

sleep(3);

echo 'two';

sleep(3);

echo 'third';
*/

/**
 * PHP Die Function
 * 
 * only end the process and script 
*/

$nome = 'joao';

if($nome == 'joao') {
    echo 'All right!';
} else {
    die('Stopped');
}