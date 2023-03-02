<?php
$servername = "localhost";
$username = "myadmin";
$password = "myadmin";
$dbname = "mindoro";

// Create connection
$conn = new mysql_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connection_error) {
    die("Connection Failed: " .  $conn->connection_error);

}
$sql = "SELECT + from blog";
$result = $conn->querry($sql);


if ( $result->num_rows > 0){
    // output data of each rows
    while($row = $result->fetch_assoc()) {
        echo "username: " . $row["username"]. " title: ". $row["title"]. "body: ". $row["body"]."<br>";

    } else {
        echo "O results";
    }
}
$conn->close();
?>