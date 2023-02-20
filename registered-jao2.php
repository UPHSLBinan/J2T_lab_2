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

// checks if registration form is submitted

$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Confirmpassword = $_POST['Confirmpassword'];

if(empty($Username)||empty($Password)||empty($Confirmpassword)){
echo 'Please complete all fields';
}
else if  ($Password != $Confirmpassword){
echo 'Passwords do no match';
}

else{
$sql = "SELECT * FROM yeshy WHERE username='$Username'"; $result = $conn->query($sql);
if ($result->num_rows > 0) {
        echo "Username already exists, please choose another";
}

else {
$sql = "INSERT INTO yeshy (username, password) 
VALUES ('".$Username."','".$Password."')";
if ($conn->query($sql) === TRUE){
{echo 'Registration successful!';
}

}
}}// Close database connection
  $conn->close();?>