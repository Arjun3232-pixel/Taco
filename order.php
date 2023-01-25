<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "The_Taco_Shop"; // DB Name
 
$v1=$_POST["food"]; //name attribute value
$v2=$_POST["qnty"];//name attribute value
$v3=$_POST["y/n"];//name attribute value
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "INSERT INTO orders VALUES('$v1','$v2','$v3')";
//srf table name
if (mysqli_query($conn, $sql)) 
{
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
