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
    <title>Home</title>
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
          
  
                        
                        echo '<div class = "mb-1"><h4>Welcome, '.$_SESSION['username'].'!
                        <a href="index.php" class="btn btn-danger float-end ml-3">Log out</a>
                        <a href="form.php" class="btn btn-primary float-end mx-3">Add Users</a></h4></div>';
                         $conn->close();?>
               
              </div>
              <div class="card-body">
                <table class ="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Age</th>
                      <th>Email</th>
                      <th>Detail</th>
                      <th>Action</th>
                     </tr>
                  </thead> 
                <tbody>
                  <?php
                        $query = "SELECT * FROM francis1";
                        $conn = mysqli_connect($servername, $username, $password, $db);
                        $query_run = mysqli_query($conn,$query);

                        if(mysqli_num_rows($query_run) > 0 )
                        {
                          foreach($query_run as $users)
                          {
                            ?>
                            <tr>
                              <td><?= $users['fname']; ?></td>
                              <td><?= $users['lname']; ?></td>
                              <td><?= $users['age']; ?></td>
                              <td><?= $users['email']; ?></td>
                              <td><?= $users['detail']; ?></td>
                              <td>
                                <a href="show.php?email=<?= $users['email']; ?>" class="btn btn-info btn-sm">View</a>
                                <a href="update.php?email=<?= $users['email']; ?>" class="btn btn-success btn-sm">Edit</a>
                                <form action = "delete.php" method = "POST" class = "d-inline">
                                     <button type="submit" name="delete_student" value="<?=$users['email'];?>" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                              </td>
                          </tr>
                          <?php
                          }
                        }
                        else
                                    {
                                        echo "<h5> No Record Found </h5>";
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
