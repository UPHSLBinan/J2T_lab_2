<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "castillo";

$Username =isset($_POST['Username']) ? $_POST['Username'] : '';
$Password =isset($_POST['Password']) ? $_POST['Password'] : '';
$Fname =isset($_POST['Fname']) ? $_POST['Fname'] : '';
$Lname =isset($_POST['Lname']) ? $_POST['Lname'] : '';
$Age = isset($_POST['Age']) ? $_POST['Age'] : '';
$Bday =isset($_POST['Bday']) ? $_POST['Bday'] : '';
$Address =isset($_POST['Address']) ? $_POST['Address'] : '';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update query
$sql = "UPDATE user SET Fname='$Fname', Lname='$Lname', Age='$Age', Bday='$Bday', Address='$Address' WHERE Username='$Username'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>