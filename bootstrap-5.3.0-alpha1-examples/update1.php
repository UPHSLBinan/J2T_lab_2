<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "castillo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = "title";
$body = "body";
$username = "username";

// Update query
$sql = "UPDATE castilloarielle SET title='".$title."', body='".$body."' WHERE username='".$username."'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>