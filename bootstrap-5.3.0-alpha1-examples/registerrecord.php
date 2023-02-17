
<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "parot";

$user= $_POST['user'];
$pass= $_POST['pass'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (user, pass)
VALUES ('".$user."','".$pass."')";

if ($conn->query($sql) === TRUE) {
  echo "Registered successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>