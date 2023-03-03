<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
<<<<<<< Updated upstream
$dbname = "santos_krizia";
=======
$dbname = "molinajamesdeanb";
>>>>>>> Stashed changes

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
<<<<<<< Updated upstream

// sql to create table
$sql = "CREATE TABLE krizia (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

=======
echo "Connected successfully";
>>>>>>> Stashed changes
$conn->close();
?>
