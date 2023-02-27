<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
    // User is not logged in, redirect to the login page
    header('Location: index.php');
    exit;
}
?>
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
              <h4>User Info</h4>
            </div>
            <div class="card-body">
              <?php
                    $servername = "localhost";
                    $username = "hernandez";
                    $password = "ranonline0110";
                    $dbname = "hernandez";

                    

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $age = $_POST['age'];
                    $email = $_POST['email'];
                    $detail = $_POST['detail'];
                    $sql = "INSERT INTO francis1 (fname, lname, age, email, detail)
                    VALUES ('".$fname."', '".$lname."', '".$age."','".$email."','".$detail."')";

                    if ($conn->query($sql) === TRUE) {
                      echo '<div class="alert alert-success" role="alert">
                      Record Added Successfully!</div>';
                    } else {
                      echo '<div class="alert alert-success" role="alert">Error: ' . $sql .','. $conn->error.'</div>';
                    }
                  }
                    $conn->close();
                    ?>
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
                  <label for="age" class="form-label">Age</label>
                  <input type="number" class="form-control" name="age" placeholder="Age"required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="name@example.com"required>
                </div>
                <div class="mb-3">
                  <label for="detail" class="form-label">Details</label>
                  <input type="varchar" class="form-control" name="detail" placeholder="Details"required>
                </div>
                <button type="submit" class="btn btn-success">Confirm</button>
                <a class="btn btn-primary" href="login.php" role="button">Back to Home</a>
                
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
