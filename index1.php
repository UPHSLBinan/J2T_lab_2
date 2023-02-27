<?php
$servername = "localhost";
$username = "suzuki";
$password = "myadmin";
$dbname = "suzuki";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Fname VARCHAR(30) NOT NULL,
Lname VARCHAR(30) NOT NULL,
Age VARCHAR(30) NOT NULL,
Email VARCHAR(50) NOT NULL,
Detail VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table users created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>