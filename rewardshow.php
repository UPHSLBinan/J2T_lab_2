<?php
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

$sql = "SELECT usernamelogin, passwordlogin FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " Username: " . $row["usernamelogin"]. " - Password: " . $row["passwordlogin"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>