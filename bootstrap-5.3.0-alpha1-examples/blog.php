<?php
// Check if the form has been submitted and the required fields are present
if(isset($_POST['title'], $_POST['body'], $_POST['username'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $username = $_POST['username'];

    $servername = "localhost";
    $dbusername = "myadmin";
    $dbpassword = "myadmin";
    $dbname = "castillo";

    // Create connection
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO castilloarielle (title, body, username)
    VALUES ('".$title."', '".$body."', '".$username."')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Error: One or more required fields are missing.";
}
