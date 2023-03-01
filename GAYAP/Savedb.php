<?php

$fname = $_POST['FName'];
$lname = $_POST['LName'];
$age = $_POST['Age'];
$email = $_POST['Email'];
$detail = $_POST['Detail'];


$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "gayap";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (FName, LName, Age, Email, Detail)
VALUES ('".$fname."', '".$lname."',  '".$age."', '".$email."', '".$detail."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>