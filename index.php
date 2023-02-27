
<html>
  <head>
    <title>Log In</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4>Log In</h4>
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

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $username = $_POST['username'];
                  $password = $_POST['password'];
                  $sql = "SELECT * FROM accounts WHERE username='$username' AND password='$password'";
                      $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  session_start();
                  $_SESSION['username'] = $username;
                  $_SESSION['password'] = $password;
                  // Redirect to the user's profile or dashboard page
                  header('Location: login.php');
                  exit;
                   
                    
                    
                  }
                  }  $conn->close();?>
              <form method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="varchar" class="form-control" name="username" placeholder="Enter your username">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Enter your password">
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
                <a class="btn btn-success" href="register.php" role="button">Register</a>
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
