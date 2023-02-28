<?php
	include('register.php');
	$id=$_GET['id'];
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $detail=$_POST['detail'];
	
	mysqli_query($conn,"update `user` set fname='$fname', lname='$lname', age='$age', email='$email', detail='$detail' where userid='$id'");
	header('location:index.php');
?>