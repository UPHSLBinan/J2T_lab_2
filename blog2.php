<?php
$Title = $_POST['Title'];
$Body = $_POST['Body'];
$Username = $_POST['Username'];

$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "jao";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users2 (Title, Body, Username)
VALUES ('".$Title."', '".$Body."', '".$Username."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);