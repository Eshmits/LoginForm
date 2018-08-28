<?php

if(isset($_POST['submit'])) {

	include_once 'server.php';

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);
	
	

	//Error
	if(empty($name) || empty($pass) || empty($email)) {
		header("Location: logreg.php?signup=empty");
		exit();
	} else {
		if (!preg_match("/^[a-zA-Z]*$/", $name)) {
			header("Location: logreg.php?signup=invalid");
			exit();
		} else {
			// check email
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: logreg.php?signup=email");
				exit();
			} else {
				$hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
				//insert user into DB
				$sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$hashedPwd');";
				mysqli_query($conn, $sql);
				header("Location: logreg.php?signup=success");
				exit();
			}
		}
	}

} else {
	header("Location: logreg.php?signup=error");
	exit();
}