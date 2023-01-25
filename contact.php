<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "The_Taco_Shop"; // DB Name
 
$v1=$_POST["name"]; //name attribute value
$v2=$_POST["email"];//name attribute value
$v3=$_POST["phone"];//name attribute value
$v4=$_POST["message"];//name attribute value
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "INSERT INTO contact VALUES ('$v1','$v2','$v3','$v4')";
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
