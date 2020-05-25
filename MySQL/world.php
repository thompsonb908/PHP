<?php
require "../Helpers/Helper.php";

/*
    mysqli is a PHP library for working with MySQL databases.
    It can be used in either a procedural or object oriented
    way. The steps for connecting to and working with a MySQL
    database are below:
*/

$usr = "root";
$pws = "";
$db = "world";

/*
    STEP 1: Connect to database with mysqli.
    do not use "localhost" for the host name,
    it only gives a UNIX connection, "127.0.0.1"
    gives a TCP/IP connection.
*/

$conn = new mysqli("127.0.0.1",$usr,$pws,$db);
// STEP 2: Make a query
$sql = "SELECT * FROM `city` WHERE `Population` > 6000000 ORDER BY `Population` DESC";
// STEP 3: Get the wuery result (all of the rows).
$result = $conn->query($sql);
echo "<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>";

echo "<table>";
echo "<tr><th>Name</th><th>CountryCode</th><th>District</th><th>Population</th></tr>";
// STEP 4: Get each row as an associative array,
// until there are no more rows.
while ($row = $result->fetch_assoc()) {
    //write out the contents of the fields
    echo "<tr>";
    echo "<td>" . $row["Name"] . "</td>";
    echo "<td>" . $row["CountryCode"] . "</td>";
    echo "<td>" . $row["District"] . "</td>";
    echo "<td>" . $row["Population"] . "</td>";
    echo "</tr>";
}

echo "</table>";

pageBottom();
?>