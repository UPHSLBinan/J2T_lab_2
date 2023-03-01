<?php

  $servername = "localhost"; 
  $username = "myadmin"; 
  $password = "myadmin"; 
  $db = "parot"; 
  $conn = new mysqli($servername, $username, $password, $db);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

// checks if the registration form is submitted

$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

//confirmation

if(empty($username)||empty($password)||empty($confirmpassword)){
echo 'Please complete all fields';
}
else if  ($password != $confirmpassword){
echo 'Passwords do no match';
}

else{
$sql = "SELECT * FROM login WHERE username='$username'"; $result = $conn->query($sql);
if ($result->num_rows > 0) {
        echo "Username already exists, please choose another";
}

else {
$sql = "INSERT INTO login (username, password) 
VALUES ('".$username."','".$password."')";
if ($conn->query($sql) === TRUE){
{echo 'Registration successful!';
}

}
}}

// Close database connection
  $conn->close();?>