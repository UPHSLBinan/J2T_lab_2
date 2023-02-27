<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from userprofile";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Username:  " . $row["Username"]. "<br> Password:".  $row["Password"]. "<br> Firstname:".  $row["Fname"]. "<br> Lastname:". $row["Lname"]. "<br> Age:" . $row["Age"]."<br> Birthday:". $row["Birthday"]. "<br> Address:". $row["Address"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
