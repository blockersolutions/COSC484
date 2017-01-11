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

$query = "INSERT INTO comments (userName, date, comment) VALUES ('$name', '$date', '$comment1')";
// Execute SQL statement
if (!($comments = @ mysql_query ($query, $connection)))
showerror();

echo "Comment Posted";


?>