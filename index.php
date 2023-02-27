<?php
$servername = "localhost";
$username = "suzuki";
$password = "myadmin";
$dbname = "suzuki";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (Fname, Lname, Age, Email, Detail)
VALUES ('$_POST[Fname]', '$_POST[Lname]', '$_POST[Age]', '$_POST[Email]', '$_POST[Detail]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>