<?php

  $servername = "localhost"; 
  $username = "hernandez"; 
  $password = "ranonline0110"; 
  $db = "hernandez"; 
  $conn = new mysqli($servername, $username, $password, $db);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

// checks if registration form is submitted

$username = $_POST['username'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

if(empty($username)||empty($password)||empty($confirmpassword)){
echo 'Please complete all fields';
}
else if  ($password != $confirmpassword){
echo 'Passwords do no match';
}

else{
$sql = "SELECT * FROM accounts WHERE username='$username'"; $result = $conn->query($sql);
if ($result->num_rows > 0) {
        echo "Username already exists, please choose another";
}

else {
$sql = "INSERT INTO accounts (username, fname, lname, password, confirmpassword) 
VALUES ('".$username."', '".$fname."', '".$lname."', '".$password."', '".$confirmpassword."')";
if ($conn->query($sql) === TRUE){
{echo 'Registration successful!';
}

}
}}// Close database connection
  $conn->close();?>