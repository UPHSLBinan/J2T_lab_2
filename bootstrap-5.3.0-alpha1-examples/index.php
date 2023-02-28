<?php
$Username =isset($_POST['Username']) ? $_POST['Username'] : '';
$Password =isset($_POST['Password']) ? $_POST['Password'] : '';
$Fname =isset($_POST['Fname']) ? $_POST['Fname'] : '';
$Lname =isset($_POST['Lname']) ? $_POST['Lname'] : '';
$Age = isset($_POST['Age']) ? $_POST['Age'] : '';
$Bday =isset($_POST['Bday']) ? $_POST['Bday'] : '';
$Address =isset($_POST['Address']) ? $_POST['Address'] : '';

$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "castillo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (Username, Password, Fname, Lname, Age, Bday, Address)
        VALUES ('".$Username."','".$Password."','".$Fname."', '".$Lname."', '".$Age."', '".$Bday."', '".$Address."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
