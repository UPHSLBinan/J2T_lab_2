<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `user` where fname='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<head>
        <style>
            form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 3px 6px 0 rgba(0,0,0,0.19);
    margin: 20px auto;
    width: 500px;
    font-family: 'Roboto', sans-serif;
}


label {
    color: #7d7d7d;
    font-size: 0.9em;
    font-weight: bold;
    margin-top: 8px; 
    margin-bottom: 8px;
    display: block;
}


input {
    width: 100%;
    padding: 10px;
    border: 1px solid #d3d3d3;
    border-radius: 5px;
    margin-top: 8px;
    margin-bottom: 8px;
}


button {
    background-color: #1c87c9;
    color: white;
    padding: 10px;
    font-size: 1em;
    width: 50%;
    border: none;
    border-radius: 5px;
    margin-top: 8px;
    margin-bottom: 8px;
    cursor: pointer;
}


.container {
    padding: 10px;
    text-align: center;
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}


td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}


tr:nth-child(even) {
    background-color: #dddddd;
}

        </style>
</head>
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