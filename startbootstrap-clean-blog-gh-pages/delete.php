<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `user` where fname='$id'");
	header('location:register.php');
?>