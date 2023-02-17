<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "parot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT user, pass FROM login ORDER BY pass";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " Name: " . $row["user"]. " " . $row["pass"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>