<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "viardo";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$email = $_POST['email'];
$detail = $_POST['detail'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create column
$sql = "INSERT INTO Monina(fname, lname, age, email, detail)
VALUES ('".$fname."', '".$lname."', '".$age."','".$email."','".$detail."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>