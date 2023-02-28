<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userprofile";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users(Firstname, Middlename, Lastname, Age, Birthday, Address)
VALUES ('$_POST[Firstname];', '$_POST[Middlename];', '$_POST[Lastname];', '$_POST[Age];', '$_POST[Birthday];', '$_POST[Address];')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>