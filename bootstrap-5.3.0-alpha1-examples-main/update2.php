<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Title = "Title";
$Body = "Body";
$Username = "Username";

// Update query
$sql = "UPDATE blog SET Title='".$Title."', Body='".$Body."' WHERE Username='".$Username."'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
