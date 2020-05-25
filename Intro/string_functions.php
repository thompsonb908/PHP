<?php
/*
 * Require includes the contents of a file, if the file cannot
 * be found an error is raised and execution ends.
 *
 * Include does the same thing but an error is not raised
 * and execution can continue with a warning.
 */

require "../Helpers/Helper.php";

pageTop();

$greeting = "Hello";
$say_bye = "Have a nice day";

echo "<p>\"$greeting\" has " . strlen($greeting) . " characters</p>";

echo "<p>\"$say_bye\" has " . str_word_count($say_bye) . " words</p>";

echo "<p>\"$greeting\" backwards is \"" . strrev($greeting) . "\"</p>";

$word = "wonderful";

if ($pos = strpos($say_bye, $word)) {
    echo "<p>\"$word\" is at position $pos in \"$say_bye\"</p>";
} else {
    echo "<p>\"$word\" is not found in \"$say_bye\"</p>";
}

$say_bye = str_replace("nice", $word, $say_bye);
echo "<p>$say_bye</p>";

pageBottom();
?>