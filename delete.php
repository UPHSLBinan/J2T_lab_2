<?php
$servername = "localhost"; 
$username = "hernandez"; 
$password = "ranonline0110"; 
$db = "hernandez"; 
$conn = new mysqli($servername, $username, $password, $db);
// Create connection
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
                  

if(isset($_POST['delete_student']))
{
    $student_email = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM francis1 WHERE email='$student_email' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        header("Location: login.php");
        exit(0);
    }
    else
    {
        header("Location: login.php");
        exit(0);
    }
}
$conn->close();?>