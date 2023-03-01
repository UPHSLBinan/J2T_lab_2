<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "Gayap";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT FName, LName FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " Name: " . $row["FName"]. " " . $row["LName"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>