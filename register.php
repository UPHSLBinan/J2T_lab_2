<?php
$host_name = 'localhost';
$database = 'belandres';
$user_name = 'root';
$password = '';

$conn = new mysqli($host_name, $user_name, $password, $database);


if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>


