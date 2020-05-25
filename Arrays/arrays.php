<?php
require "../Helpers/Helper.php";

pageTop();

// All php arrays are associative (like dictionaries or hash tables
// in other languages). Arrays are defined by a 'key' and a 'value'

$colors = [1 => "red", 2 => "green", 3 => "blue"];

// the print_r function prints out the contents of an array
print_r($colors);

echo "<br />";
echo "<br />";

//if no keys are supplied, they will be generated:
$numbers = [1,2,3,4,5];
print_r($numbers);

echo "<br />";
echo "<br />";

// to access a value in a array, provide its key:
$thirdNumber = $numbers[2];
echo "The third number is: $thirdNumber<br />";

//can also assign a value to an array, whether the key exists or not:
$numbers[2] = -4;
$numbers[5] = 6;
print_r($numbers);

echo "<br />";
echo "<br />";

// If the keys of an array are numerical, you can provide a different
// starting index by only assigning a key to the first element:
$flavors = [-1 => "chocolate", "vanilla", "strawberry"];
print_r($flavors);

echo "<br />";
echo "<br />";

// The keys of an array can be of any type (strings are common):
$animalSounds = ["cat" =>"meow", "dog"=>"woof"];
print_r($animalSounds);
print "<br />";
print "The dog says " . $animalSounds["dog"] . "<br />";

echo "<br />";
/* So what is the difference between print and echo?
   echo can take multiple comma-separated values, though
   this is unusual:
*/

echo print_r($colors). "<br />", print_r($numbers), "<br />";
echo "<br />";
// print returns a value (1), and can be used with or
// without parenthesis:

if (print($animalSounds["cat"] . "<br />")){
    print "the cat made a sound!<br />";
}

pageBottom();
?>