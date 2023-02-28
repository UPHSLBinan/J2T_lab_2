<?php
$host_name = '127.0.0.1';
$database = 'perez';
$user_name = 'perez';
$password = 'admin';

$conn = new mysqli($host_name, $user_name, $password, $database);


if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>