<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "parot";

$Username = "Username";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql is deleting a record
$sql = "DELETE FROM blogregister WHERE Username = '$Username'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>