<?php
$title = $_POST['title'];
$body = $_POST['body'];
$username = $_POST['username'];

$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "castillo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO castilloarielle (title, body, username)
VALUES ('".$title."', '".$body."', '".$username."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);