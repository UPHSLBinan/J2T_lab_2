<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$firstname = $_POST['firstname'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$age = $_POST['age'] ?? '';
$birthday = $_POST['birthday'] ?? '';
$address = $_POST['address'] ?? '';

$servername = "localhost";
$dbusername = "myadmin";
$dbpassword = "myadmin";
$dbname = "santosk";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO santos (username, password, firstname, lastname, age, birthday, address)
VALUES ('$username', '$password', '$firstname', '$lastname', '$age', '$birthday', '$address')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
