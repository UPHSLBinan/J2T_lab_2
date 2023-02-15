<?php
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Age = $_POST['Age'];
$Email = $_POST['Email'];
$Detail = $_POST['Detail'];

$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "hernandez";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (Firstname, Lastname, Age, Email, Detail)
VALUES ('".$Firstname."', '".$Lastname."', '".$Age."', '".$Email."', '".$Detail."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>