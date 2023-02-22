<?php
	include('conn.php');
	
	
	$fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $details=$_POST['details'];
    $emails=$_POST['emails'];
		
	mysqli_query($conn,"insert into `user` (fname,lname,age,details,emails) values ('$fname','$lname', '$age', '$details', '$emails')");
	header('location:register.php');
	
?>