<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "santosk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from santos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Username:  " . $row["username"]. "<br> Password:".  $row["password"]. "<br> Firstname:".  $row["firstname"]. "<br> Lastname:". $row["lastname"]. "<br> Age:" . $row["age"]."<br> Birthday:". $row["birthday"]. "<br> Address:". $row["address"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>