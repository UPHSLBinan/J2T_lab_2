<?php
$servername = "localhost";
$username = "cishernandez";
$password = "Ranonline0110";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>