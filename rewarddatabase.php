<?php
$usernamelogin = $_POST["usernamelogin"];
$usernamepassword = $_POST["usernamepassword"];

$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "yap";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (usernamelogin, usernamepassword)
VALUES ('".$usernamelogin."','".$usernamepassword."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>