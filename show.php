<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
    // User is not logged in, redirect to the login page
    header('Location: index.php');
    exit;
}
                  $servername = "localhost"; 
                  $username = "hernandez"; 
                  $password = "ranonline0110"; 
                  $db = "hernandez"; 
                  $conn = new mysqli($servername, $username, $password, $db);?>
<html>
  <head>
    <title>View User</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4>User Info <a href= "login.php" class = "btn btn-danger float-end">BACK</a></h4>
            </div>
              <div class = "card-body">
                <?php
                 if(isset($_GET['email']))
                 {
                    $student_email = mysqli_real_escape_string($conn,$_GET['email']);
                    $query = "SELECT * FROM francis1 WHERE email = '$student_email'";
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                      $users = mysqli_fetch_array($query_run);
                      ?>

                        <div class="mb-3">
                          <label>First Name</label>
                          <p class = "form-control">
                            <?=$users['fname'];?>
                          </p>
                        </div>

                        <div class="mb-3">
                          <label>Last Name</label>
                          <p class = "form-control">
                            <?=$users['lname'];?>
                          </p>
                        </div>

                        <div class="mb-3">
                          <label>Age</label>
                          <p class = "form-control">
                            <?=$users['age'];?>
                          </p>
                        </div>

                        <div class="mb-3">
                          <label>Email</label>
                          <p class = "form-control">
                            <?=$users['email'];?>
                          </p>
                        </div>

                        <div class="mb-3">
                          <label>Details</label>
                          <p class = "form-control">
                            <?=$users['detail'];?>
                          </p>
                        </div>

                      <?php
                      }
                      else
                      {
                        echo "<h4>No Such Record Found</h4>";
                      }
                    }
                 ?>

                 
              </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>