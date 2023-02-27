<?php
$FNAME = $_POST["FNAME"];
$LNAME = $_POST["LNAME"];
$AGE = $_POST["AGE"];
$EMAIL = $_POST["EMAIL"];
$DETAIL = $_POST["DETAIL"];

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

<<<<<<< HEAD
$sql = "INSERT INTO login (usernamelogin, passwordlogin)
VALUES ('".$usernamelogin."','".$passwordlogin."')";
=======
$sql = "INSERT INTO users (FNAME, LNAME, AGE, EMAIL, DETAIL)
VALUES ('".$FNAME."','".$LNAME."','".$AGE."','".$EMAIL."','".$DETAIL."')";
>>>>>>> parent of 78f78d1 (rewarddatabase)

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>