<?php

/**  
 * PHP Strings
 * A string is a sequence of characters, like "Hello world!".
 * 
 * PHP String Functions
 * In this chapter we will look at some commonly used functions to manipulate strings.
*/

/**
 * strlen() - Return the Length of a String
 * The PHP strlen() function returns the length of a string.
*/

// Example
// Return the length of the string "Hello world!":
echo strlen("Hello world!") . "<br><br>"; // outputs 12

/**
 * str_word_count() - Count Words in a String
 * The PHP str_word_count() function counts the number of words in a string.
*/

// Example
// Count the number of word in the string "Hello world!":
echo str_word_count("Hello world!") . "<br><br>"; // outputs 2

/**
 * strrev() - Reverse a String
 * The PHP strrev() function reverses a string.
*/

// Example
// Reverse the string "Hello world!":
echo strrev("Hello world!") . "<br><br>"; // outputs !dlrow olleH

/**
* strpos() - Search For a Text Within a String
* The PHP strpos() function searches for a specific text within a string. If a match is found,
* the function returns the character position of the first match.
* If no match is found, it will * return FALSE.
*/

// Example
// Search for the text "world" in the string "Hello world!":
echo strpos("Hello world!", "world") . "<br><br>"; // outputs 6


// Tip: The first character position in a string is 0 (not 1).

/**
 * str_replace() - Replace Text Within a String
 * The PHP str_replace() function replaces some characters with some other characters in a string.
*/

// Example
// Replace the text "world" with "Dolly":
echo str_replace("world", "Dolly", "Hello world!") . "<br><br>"; // outputs Hello Dolly!


/////////////////////////////////////////////////////////////////////////

$content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptate, facere tempore architecto quibusdam, sunt, quasi nemo ducimus iusto obcaecati veritatis iste nulla sit? Dicta voluptates necessitatibus incidunt ratione reiciendis.';

//cut strings
echo substr($content, 0, 21)."<br>" . "<br>";
// 2 parameter where start, 3 parameter how many lines you want\\

$name = 'john';

$names = explode(' ', $name); // get the words and organize them into an array

print_r($names); // used to see arrays

echo "<br>" . "<br>";

$names = implode(' ', $names);

echo $names . "<br>" . "<br>";

$content1 = "<h1>GAB</h1> Another thing";

// Remove html tags
echo strip_tags($content1) . "<br>" . "<br>";

//show the html tags
echo htmlentities("<div></div>");

echo "<br>" . "<br>" . "<hr>" . "<br/>";

// ========================================================

$array1 = ['color' => 'red', 2, 4];
$array2 = ['a', 'b', 'color' => 'green', 'form' => 'rect', 4];

$result = array_merge($array1, $array2); //unify two arrays.
print_r($result);

echo "<br>" . "<br>";

$arr1 = ['key1' => 'value1', 'key2' => 'value2'];
$arr2 = ['key3' => 'value3', 'key4' => 'value4'];

$result2 = array_merge($arr1, $arr2);
print_r($result2);

echo "<br>" . "<br>";

$ar1 = ['A' => '1', 'B' => '2'];
$ar2 = ['A' => '1', 'D' => '4'];

print_r(array_intersect($ar1, $ar2)); //return the same value in two identical keys.

$array_ = ["<p>gas</p>", 'joa', "<h1>fab</h1>"];

print_r(array_map('strip_tags', $array_));