<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "dimaguila";

$Username = $_POST ['Username'];
$Password = $_POST ['Password'];
$ConfirmPassword = $_POST ['ConfirmPassword'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "Insert INTO register (Username, Password, ConfirmPassword)
Values ('".$Username."','".$Password."','".$ConfirmPassword."')";

if ($conn->query($sql) === TRUE) {
  echo "Registered successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>