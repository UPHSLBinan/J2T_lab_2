<?php
include('register.php');
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `user` where userid='$id'");
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
<h2>Edit</h2>
<form method="POST" action="update.php?id=<?php echo $id; ?>">
<label>Firstname:</label><input type="text" value="<?php echo $row['fname']; ?>" name="fname">
<label>Lastname:</label><input type="text" value="<?php echo $row['lname']; ?>" name="lname">
<label>Age:</label><input type="text" value="<?php echo $row['age']; ?>" name="age">
<label>Email:</label><input type="text" value="<?php echo $row['email']; ?>" name="email">
<label>Detail:</label><input type="text" value="<?php echo $row['detail']; ?>" name="detail">
<input type="submit" name="submit">
<a href="index.php">Back</a>
</form>
</body>
</html>
