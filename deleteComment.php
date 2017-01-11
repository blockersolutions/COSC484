<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>

<?php

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$password = $_POST['passwd'];

include 'db.inc.php';
if (!($connection = @ mysql_connect($hostName, $username, $password)))
showerror();
// Use the cars database
if (!mysql_select_db($databaseName, $connection))
showerror();
// Create SQL statement

$query = "SELECT * FROM admins WHERE FirstName= '". $firstname ."'";
// Execute SQL statement
if (!($admins = @ mysql_query ($query, $connection)))
showerror();

while($row = @ mysql_fetch_array($admins)) {
if($row['FirstName'] == $firstname){

 if($row['LastName'] == $lastname){

 if($row['Password'] == $_POST['passwd']){
 
 $query = "DELETE FROM comments";

 if (!($comments = @ mysql_query ($query, $connection)))
showerror();

echo "All Comments Deleted";
echo "<br>";

 $query = "UPDATE admins SET FirstName='William', LastName='Blocker', Password='Towson123' WHERE FirstName='William'";

 if (!($updateName = @ mysql_query ($query, $connection)))
showerror();

echo "Name Updated";

}
}
}
}


    





?>
</body>
</html>