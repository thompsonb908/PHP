<html>
<head></head>
<body>
    <form action="insert.php" method="post">
        <p>Add a language: <input type="text" name="language" /></p>
        <p><input type="submit" value="Submit"></p>
    </form>
<?php
// Connect to database:
$usr = "root";
$pws = "";
$db = "phpcourse";
$conn = new mysqli("127.0.0.1",$usr,$pws,$db);

// If there is POST data, insert it into the database:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $language = $_POST['language'];
    $sql = "INSERT INTO language (name) VALUES ('$language')";

    // Make sure the query is valid, or log the error:
    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Always present the table:
$sql = "SELECT name FROM language ORDER BY name";
$result = $conn->query($sql);
echo "<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>";

echo "<table>";
echo "<tr><th>Name</th></tr>";
while ($row=$result->fetch_assoc()) {
    echo "<tr><td>" . $row['name'] . "</td></tr>";
}
echo "</table>";
?>