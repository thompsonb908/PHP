<?php
require "../Helpers/Helper.php";

pageTop();

/*
    $_REQUEST contains both GET and POST data
    to a php page. (it also contains $_COOKIE data)
*/

$name = $_REQUEST["name"];
$age = $_REQUEST["age"];

echo "Hello $name, I see you are $age years old.";

pageBottom();
?>