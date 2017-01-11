<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>

<?php

$name = $_POST['name'];
$date = $_POST['date'];
$comment1 = $_POST['comment'];

include 'db.inc.php';
if (!($connection = @ mysql_connect($hostName, $username, $password)))
showerror();
// Use the cars database
if (!mysql_select_db($databaseName, $connection))
showerror();
// Create SQL statement

$query = "SELECT * FROM comments";
// Execute SQL statement
if (!($comments = @ mysql_query ($query, $connection)))
showerror();

while($row = mysql_fetch_array($comments)) {
    echo "<p class=text-left>" .$row['userName'] . " said this on " . $row['date'] . "</p>";
    echo "<p>" .$row['comment'] . "</p>";
    echo "<hr>";
}
?>
</body>
</html>