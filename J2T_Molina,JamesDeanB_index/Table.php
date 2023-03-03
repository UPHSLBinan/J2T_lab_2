<?php
$servername = "localhost";
$username = "Admin";
$password = "jdm1093";
$dbname = "MolinaJamesDeanB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Molina (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(255) NOT NULL,
lastname VARCHAR(32550) NOT NULL,
email VARCHAR(255),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
echo "Table Molina created successfully";
} else {
echo "Error creating table: " . $conn->error;
}

$conn->close();
?>