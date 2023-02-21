<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "reg";

$User = $_POST ['un'];
$Pass = $_POST ['pw'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO regis (un, pw)
VALUES ('".$User."', '".$Pass."')";

if (mysqli_query($conn, $sql)) {
  echo  " WELCOME!!! YOU HAVE BEEN LOG IN SUCESSFULLY";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>