<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "reyes";

$Title = $_POST['Title'];
$Body = $_POST['Body'];
$Username = $_POST['Username'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO blog (Title, Body, Username) VALUES ('".$Title."', '".$Body."', '".$Username."')";


if ($conn->query($sql) === TRUE) {
    echo "Registered successfully";
} else {
  echo "Error; ". $Sql . "<br>" . $conn->error;
}
$conn->close();
?>
