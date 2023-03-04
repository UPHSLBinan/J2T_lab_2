<?php
$servername = "localhost";
$username = "suzuki";
$password = "myadmin";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE blog (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Title VARCHAR(30) NOT NULL,
Body VARCHAR(30) NOT NULL,
Username VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table users created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>