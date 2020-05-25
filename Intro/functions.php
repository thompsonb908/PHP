<?php

function writeBold($str) {
    echo "<b>$str</b>";
}

function writeTopWrapper() {
    echo "<html><head><title>Functions</title></head><body>";
}

function writeBottomWrapper() {
    echo "</body></html>";
}
function add($a, $b){
    return $a+$b;
}

writeTopWrapper();
echo "<p> ";
writeBold("This text is bold");
echo "</p><p>This text is not bold</p>";

echo "<p>The sum of 3 and 5 is " . add(3, 5) . "</p>";
writeBold("<p>The sum of -2 and 9 is " . add(-2, 9) . "</p>");
writeBottomWrapper();
?>