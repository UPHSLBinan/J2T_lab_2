<?php
$Fname =$_POST['Fname'];
$Lname =$_POST['Lname'];
$age =$_POST['age'];
$email =$_POST['email'];
$detail =$_POST['detail'];

$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "ponce";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (Fname, Lname, age, email, detail)
VALUES ('".$Fname."', '".$Lname."', '".$age."', '".$email."', '".$detail."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>