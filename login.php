<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
    // User is not logged in, redirect to the login page
    header('Location: index.php');
    exit;
}?>
<html>
  <head>
    <title>Registration</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
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
          
  
                        
                        echo '<div class = "mb-1"><h4>Welcome, '.$_SESSION['username'].'!<a href="form.php" class="btn btn-primary float-end">Add Students</a></h4></div>';
                         $conn->close();?>
               
              </div>
              <div class="card-body">
                asdasd
              </div>
              </div>
              </div>
              </div>
              </div>
              
