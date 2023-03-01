<?php
$username =$_POST['username'];
$password =$_POST['password'];
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$age = $_POST['age'];
$birthday =$_POST['birthday'];
$address =$_POST['address'];


    $servername = "localhost";
    $username = "myadmin";
    $password = "myadmin";
    $dbname = "jao";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO users (username, password, fname, lname, age, birthday, address)
    VALUES ('".$username."','".$password."','".$fname."', '".$lname."', '".$age."', '".$birthday."', '".$address."')";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>