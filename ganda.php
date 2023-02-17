<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "Jao";

$Fname = $_POST ['Fname'];
$Lname = $_POST ['Lname'];
$age = $_POST ['age'];
$email = $_POST ['email'];
$detail = $_POST ['detail'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table

$sql = "INSERT INTO users (Fname, Lname, age, email, detail)
VALUES ('".$Fname."','".$Lname."','".$age."','".$email."','".$detail."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>