<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "parot";

$Username ="Username";
$Password ="Password";
$Firstname ="Firstname";
$Lastname ="Lastname";
$Age ="Age";
$Birthday ="Birthday";
$Address ="Address";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Updating query
$sql = "UPDATE userprofile SET Firstname='$Firstname', Lastname='$Lastname', Age='$Age', Birthday='$Birthday', Address='$Address' WHERE Username='$Username'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>