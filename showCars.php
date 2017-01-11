<!DOCTYPE html>
<html>
<head>
<style>

</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
include 'db.inc.php';
if (!($connection = @ mysql_connect($hostName, $username, $password)))
showerror();
// Use the cars database
if (!mysql_select_db($databaseName, $connection))
showerror();
// Create SQL statement

if($q == 6){
$query = "SELECT * FROM Cars";
// Execute SQL statement
if (!($cars = @ mysql_query ($query, $connection)))
showerror();

echo "<table class='table table-striped table-condensed'>
<tr>
<th>Make</th>
<th>Model</th>
<th>Year</th>
<th>Price</th>
</tr>";
while($row = @ mysql_fetch_array($cars)) {
    echo "<tr>";
    echo "<td>" . $row['Make'] . "</td>";
    echo "<td>" . $row['Model'] . "</td>";
    echo "<td>" . $row['Year'] . "</td>";
    echo "<td>" . $row['Price'] . "</td>";
    echo "</tr>";
}
echo "</table>";

}
else{

$query = "SELECT * FROM Cars WHERE ID ='".$q."'";
// Execute SQL statement
if (!($cars = @ mysql_query ($query, $connection)))
showerror();

echo "<table class='table table-striped table-condensed'>
<tr>
<th>Make</th>
<th>Model</th>
<th>Year</th>
<th>Price</th>
</tr>";
while($row = @ mysql_fetch_array($cars)) {
    echo "<tr>";
    echo "<td>" . $row['Make'] . "</td>";
    echo "<td>" . $row['Model'] . "</td>";
    echo "<td>" . $row['Year'] . "</td>";
    echo "<td>" . $row['Price'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}
?>
</body>
</html>