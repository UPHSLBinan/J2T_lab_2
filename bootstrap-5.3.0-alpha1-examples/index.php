<html>
<form action="login1.php" method="post">
<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "parot";

$Fname= $_POST['Fname'];
$Lname= $_POST['Lname'];
$Age= $_POST['Age'];
$Email= $_POST['Email'];
$Detail= $_POST['Detail'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (Fname, Lname, Age, Email, Detail)
VALUES ('".$Fname."','".$Lname."','".$Age."','".$Email."','".$Detail."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<input type="Submit" name="submit" value="PROCEED">
</form>
<html>