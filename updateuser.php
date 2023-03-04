<?php
$servername = "localhost";
$username = "suzuki";
$password = "myadmin";
$dbname = "user";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$Firstname = "Firstname";
$Lastname = "Lastname";
$Age = "Age";
$Birthday = "Birthday";
$Address = "Address";
$Username = "Username";


// Update query
$sql = "UPDATE users SET Firstname='$Firstname', Lastname='$Lastname', Age='$Age', Birthday='$Birthday', Address='$Address' WHERE Username='$Username'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>