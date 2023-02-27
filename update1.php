<?php
$servername = "localhost"; 
$username = "hernandez"; 
$password = "ranonline0110"; 
$db = "hernandez"; 

$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
    header('Location: index.php');
    exit;
}

if(isset($_POST['update_student'])) {
    $student_email = mysqli_real_escape_string($conn, $_POST['update_student']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);

    $query = "UPDATE francis1 SET fname = '".$fname."', lname = '".$lname."', age = '".$age."', email = '".$email."', detail = '".$detail."' WHERE email = '".$student_email."'";
    
    
    
    

    $query_run = mysqli_query($conn, $query);

   
    if($query_run) {
        header('Location: login.php');
        exit(0);
    }
    else {
        echo "Error: " . mysqli_error($conn);
    }
}

$conn->close();
?>
