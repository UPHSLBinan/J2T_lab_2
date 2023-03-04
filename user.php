<?php
$Username =$_POST['Username'];
$Password =$_POST['Password'];
$Firstname =$_POST['Firstname'];
$Middlename =$_POST['Middlename'];
$Lastname =$_POST['Lastname'];
$Age = $_POST['Age'];
$Birthday =$_POST['Birthday'];
$Address =$_POST['Address'];


    $servername = "localhost";
    $username = "suzuki";
    $password = "myadmin";
    $dbname = "user";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO bloguser (Username, Password, Firstname, Middlename, Lastname, Age, Birthday, Address)
    VALUES ('".$Username."','".$Password."','".$Firstname."','".$Middlename."', '".$Lastname."', '".$Age."', '".$Birthday."', '".$Address."')";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>