<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "reyes";

$Username = $_POST ['Username'];
$Password = $_POST ['Password'];
$Fname = $_POST ['Fname'];
$Lname = $_POST ['Lname'];
$Age = $_POST ['Age'];
$Bday = $_POST ['Bday'];
$Address = $_POST ['Address'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (Username, Password, Fname, Lname, Age, Bday, Address) 
VALUES ('".$Username."', '".$Password."', '".$Fname."' , '".$Lname."' , '".$Age."', '".$Bday."' , '".$Address."')";


if ($conn->query($sql) === TRUE) {
    echo "Registered successfully";
} else {
  echo "Error; ". $Sql . "<br>" . $conn->error;
}
$conn->close();
?>