<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "reyes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Username, Password FROM login WHERE Username='Joshua' && Password='Reyes'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " - Username: " . $row["Username"]. " -Password: " . $row["Password"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>