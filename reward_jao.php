<?php
  
  $servername = "localhost"; 
  $username = "myadmin"; 
  $password = "myadmin"; 
  $db = "jao"; 
  $conn = new mysqli($servername, $username, $password, $db);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $result = $conn->query($sql);

if ($result->num_rows > 0) {
        
        echo "Welcome, $username! ";
      } else {
        echo "Invalid username or password";      
}  $conn->close();?>