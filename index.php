<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="widtd=device-widtd, initial-scale=1">
<link href = "css/index.css" type = "text/css" rel="STYLESHEET">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<title>Basic MySQLi Commands</title>
</head>
<body>
<div>
<form method="POST" action="add.php">
<label>Firstname:</label><input type="text" name="fname">
<label>Lastname:</label><input type="text" name="lname">
<label>Age:</label><input type="text" name="age">
<label>Email:</label><input type="text" name="email">
<label>Detail:</label><input type="text" name="detail">
<input type="submit" name="add">
</form>
</div>
<br>
<div>
<table border="1">
<thead>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Email</th>
<th>Detail</th>
<th></th>
</thead>
<tbody>
<?php
include('register.php');
$query=mysqli_query($conn,"select * from `user`");
while($row=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $row['fname']; ?></td>
<td><?php echo $row['lname']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['detail']; ?></td>
<td>
<a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
<a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</body>
</html>
