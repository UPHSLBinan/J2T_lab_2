<?php
$Title =$_POST['Title'];
$Body =$_POST['Body'];
$ArticleID =$_POST['ArticleID'];
$Timestamp =$_POST['Timestamp'];
$Username = $_POST['Username'];



    $servername = "localhost";
    $username = "myadmin";
    $password = "myadmin";
    $dbname = "Gayap";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO tab2 (Title, Body, ArticleID, Timestamp, Username)
    VALUES ('".$Title."','".$Body."','".$ArticleID."', '".$Timestamp."', '".$Username."')";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>