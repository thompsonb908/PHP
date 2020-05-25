<?php
$topWrapper = "<html><head><title>Loops</title></head><body>";
$bottomWrapper = "</body></html>";
echo $topWrapper;

$num = 0;

echo "<h3>While \$num &lt;= 5</h3>";
while ($num <= 5) {
    echo "<h3>$num,</h3>";
    $num++;
}

echo "<h3>Do while \$num &lt 5 </h3>";
do {
    echo "<h3>$num</h3>";
    $num++;
} while ($num < 5);

echo "<h3>For each value of \$num > 0, decrement</h3>";
for ($num; $num > 0; $num--) {
    echo "<h3>$num</h3>";
}

$numbers = array("one", "two", "three");
echo "<h3>foreach in array(\"one\", \"two\",\"three\")</h3>";
foreach ($numbers as $number) {
    echo "<h3>$number</h3>";
}

echo $bottomWrapper;
?>