<?php
$servername = "localhost";
$username = "hernandez";
$password = "ranonline0110";
$dbname = "hernandez";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT fname, lname FROM francis WHERE lname ='Velarde'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  //output data of each row
  while ($row = $result->fetch_assoc()) {

  echo "name:" . $row["fname"]. "" . $row["lname"]. "<br>";
    }

} else {
  echo "0 results";
}

$conn->close();
?>