<?php
	require_once 'conn.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$q_login = $conn->query("SELECT * FROM `login` WHERE `username` = '$username' && `password` = '$password'") or die(msqli_error());
	$f_login = $q_login->fetch_array();
	$v_login = $q_login->num_rows;
	if($v_login > 0){
		echo 'success';
		session_start();
		$_SESSION['username'] = $f_login['username'];
	}