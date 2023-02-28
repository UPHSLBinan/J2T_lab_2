<?php
  $host_name = '127.0.0.1';
  $database = 'flores';
  $user_name = 'flores';
  $password = 'myadmin';

  $conn = new mysqli($host_name, $user_name, $password, $database);

  // Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>