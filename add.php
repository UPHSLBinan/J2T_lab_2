<?php
	include('register.php');
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $detail=$_POST['detail'];
		
	mysqli_query($conn,"insert into `user` (fname,lname,age,email,detail) values ('$fname','$lname','$age','$email','$detail')");
	header('location:index.php');
	
?>