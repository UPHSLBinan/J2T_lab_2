<?php
	include('conn.php');
	$id=$_GET['id'];
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	
	mysqli_query($conn,"insert into `user` (fname,lname,age,details,emails) values ('$fname','$lname', '$age', '$details', '$emails')");
	header('location:register.php');
?>