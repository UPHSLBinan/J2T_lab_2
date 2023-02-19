<?php

  $servername = "localhost"; 
  $username = "myadmin"; 
  $password = "myadmin"; 
  $db = "dimaguila"; 
  $conn = new mysqli($servername, $username, $password, $db);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

// checks if registration form is submitted

$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

if(empty($username)||empty($password)||empty($confirmpassword)){
echo 'Please complete all fields';
}
else if  ($password != $confirmpassword){
echo 'Passwords do no match';
}

else{
$sql = "SELECT * FROM reward WHERE username='$username'"; $result = $conn->query($sql);
if ($result->num_rows > 0) {
        echo "Username already exists, please choose another";
}

else {
$sql = "INSERT INTO reward (username, password) 
VALUES ('".$username."','".$password."')";
if ($conn->query($sql) === TRUE){
{echo 'Registration successful!';
}

}
}}// Close database connection
  $conn->close();?>