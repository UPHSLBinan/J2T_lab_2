<?php
$FNAME =$_POST['FNAME'];
$LNAME=$_POST['LNAME'];
$AGE =$_POST['AGE'];
$EMAIL =$_POST['EMAIL'];
$DETAIL =$_POST['DETAIL'];

$servername = "localhost";
$username = "MicaErispe";
$password = "#Uphsl123";
$dbname ="viernes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (FNAME, LNAME,AGE,EMAIL,DETAIL )
VALUES ('".$FNAME."','".$LNAME."','".$AGE."','".$EMAIL."','".$DETAIL."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>