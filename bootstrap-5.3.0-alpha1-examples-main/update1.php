<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "santosk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstname = "firstname";
$lastname = "lastname";
$age = "age";
$birthday = "birthday";
$address = "address";
$username = "username";

// Update query
$sql = "UPDATE santos SET username ='$username' , lastname='$lastname', age='$age', birthday='$birthday', address='$address' WHERE firstname='$firstname'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
