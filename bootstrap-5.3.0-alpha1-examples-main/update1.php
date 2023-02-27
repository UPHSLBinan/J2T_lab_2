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

// Update query
$sql = "UPDATE userprofile SET Fname='$Fname', Lname='$Lname', Age='$Age', Birthday='$Birthday', Address='$Address', Timestamp='$Timestamp' WHERE Username='$Username'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
