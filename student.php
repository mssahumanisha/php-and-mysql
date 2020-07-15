<?php
$n1=$_POST["id"];
$n2=$_POST["username"];
$n3=$_POST["password"];
$n4=$_POST["location"];
$sqlquery=$_POST["sqlquery"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//INSERT
if($sqlquery=="ADD")
{
	$sql= "insert into  user (id, username, password,location)
values ('$n1', '$n2', '$n3','$n4')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

//delete
if($sqlquery=="DELETE")
{
$sql = "DELETE FROM user";

if (mysqli_query($conn, $sql)) {
  echo " record deleted successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>