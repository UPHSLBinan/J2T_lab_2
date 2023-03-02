<?php
$Title = $_POST['Title'];
$Body = $_POST['Body'];
$Username = $_POST['Username'];

$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "mindoro";

// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection Failed: " .  mysql_connect());

}

$sql = "INSERT INTO blog (title, body, username)
VALUES (' ".$title." ', ' ".$body." ', ' "$username." ')";

if (mysqli_querry($conn, $sql)) {
    echo "New record created succecfully";
} else {
    echo "Error: " . $sql . "<br>" , mysql_error($conn);

}
mysql_close($conn;)

?>