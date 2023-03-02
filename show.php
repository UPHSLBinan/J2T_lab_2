<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "mindoro";

// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connection_error) {
    die("Connection Failed: " .  $conn->connection_error);

}
$sql = "SELECT + from userprofile";
$result = $conn->querry($sql);

if ( $result->num_rows > 0){
    // output data of each rows
    while($row = $result->fetch_assoc()) {
        echo "username: " . $row["username"]. "<br> Password". $row["password"]. "<br> firstname: ". $row["firstname"]. "<br lastname". $row["lastname"]. "<br> age: ". $row["age"]. "<br> birthday: " . $row["birthday"]. "<br> address: ". $row["address"]."<br>";

    } else {
        echo "O results";
    }
}
$conn->close();
?>

