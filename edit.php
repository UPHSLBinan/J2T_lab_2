<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `user` where fname='$id'");
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
        <label>Details:</label><input type="text" value="<?php echo $row['details']; ?>" name="details">
        <label>Email:</label><input type="text" value="<?php echo $row['emails']; ?>" name="emails">
		<input type="submit" name="submit">
		<a href="register.php">Back</a>
	</form>
</body>
</html>