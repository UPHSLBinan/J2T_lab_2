<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "jao";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "username:  " . $row["username"]. "<br> password:".  $row["password"]. "<br> firstname:".  $row["fname"]. "<br> lastname:". $row["lname"]. "<br> age:" . $row["age"]."<br> birthday:". $row["birthday"]. "<br> address:". $row["address"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>