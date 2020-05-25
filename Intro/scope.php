<?php
require "../Helpers/Helper.php";

pageTop();

//declare $num at top level
$num = 4;

function setNum() {
    $num = 5;
    echo "\$num in function setNum() is $num<br />";
}

function setGlobalNum() {
    global $num;
    $num = 6;
    echo "\$num in function setGlobalNum() is $num<br />";
}

echo "\$num before calling setNum() is $num<br />";
setNum();
echo "\$num after calling setNum() is $num<br />";
setGlobalNum();
echo "\$num after calling setGlobalNum() is $num<br />";

pageBottom();
?>