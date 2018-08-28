<?php

session_start();

if (isset($_POST['submit'])) {

	include_once 'server.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);

	//Error
	if (empty($email) || empty($pass)) {
		header("Location: logreg.php?login=empty");
			exit();
	} else {
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: logreg.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				$hashedPassCheck = password_verify($pass, $row['password']);
				if ($hashedPassCheck == false) {
					header("Location: logreg.php?login=passerror");
					exit();
				} elseif ($hashedPassCheck == true) {
					$_SESSION['u_email'] = $row['email'];
					header("Location: index.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: logreg.php?login=error");
	exit();
}

?>