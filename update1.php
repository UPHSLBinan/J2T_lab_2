<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "jao";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$fname = "fname";
$lname = "lname";
$age = "age";
$birthday = "birthday";
$address = "address";


// Update query
$sql = "UPDATE users SET fname='$fname', lname='$lname', age='$age', birthday='$birthday', address='$address' WHERE username='$username'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>