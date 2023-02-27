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
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4>Register</h4>
            </div>
            <div class="card-body">
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

                // checks if registration form is submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $password = $_POST['password'];
                $confirmpassword = $_POST['confirmpassword'];

                if(empty($username)||empty($password)||empty($confirmpassword)){
                echo 'Please complete all fields';
                }
                else if  ($password != $confirmpassword){
                echo '<div class="alert alert-danger" role="alert">
                Passwords do not match!</div>';
                }

                else{
                $sql = "SELECT * FROM accounts WHERE username='$username'"; $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo'<div class="alert alert-danger" role="alert">
                    Username already exists!</div>';
                }

                else {
                $sql = "INSERT INTO accounts (username, fname, lname, password, confirmpassword) 
                VALUES ('".$username."', '".$fname."', '".$lname."', '".$password."', '".$confirmpassword."')";
                if ($conn->query($sql) === TRUE){
                {echo '<div class="alert alert-success" role="alert">
                    Registration Successful! <a href="index.php" class="alert-link">Log in here</a></div>';
                }

                }}
                }}// Close database connection
                $conn->close();?>
              <form method="POST">
                <div class="mb-3">
                  <label for="fname" class="form-label">First Name</label>
                  <input type="varchar" class="form-control" name="fname" placeholder="First Name"required>
                </div>
                <div class="mb-3">
                  <label for="lname" class="form-label">Last Name</label>
                  <input type="varchar" class="form-control" name="lname" placeholder="Last Name"required>
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="varchar" class="form-control" name="username" placeholder="Username"required>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password"required>
                </div>
                <div class="mb-3">
                  <label for="confirmpassword" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password"required>
                </div>
                <button type="submit" class="btn btn-success">Register</button>
                <a class="btn btn-primary" href="index.php" role="button">Back to Login</a>
                
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>
