<?php
$title = $_POST['title'];
$body = $_POST['body'];

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

$sql = "INSERT INTO blog (title, body)
VALUES ('".$title."', '".$body."')";

if ($conn->query($sql) === TRUE) {
  echo "Blog Post created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
