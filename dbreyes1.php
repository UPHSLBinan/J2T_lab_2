<?php

$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"];
$Age = $_POST["Age"];
$Email = $_POST["Email"];
$Detail = $_POST["Detail"];


// establish database connection
$host = "localhost"; 
$username = "myadmin"; 
$password = "myadmin"; 
$dbname = "reyes"; 
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



// insert data into database
$sql = "INSERT INTO users (Firstname, Lastname, Age, Email, Detail)
VALUES ('".$Firstname."', '".$Lastname."', '".$Age."', '".$Email."', '".$Detail."')";
if (mysqli_query($conn, $sql)) {
  echo "Data stored successfully.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// close database connection
mysqli_close($conn);
?>