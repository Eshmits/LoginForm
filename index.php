<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>HOME PAGE</h1>
<?php
  if (isset($_SESSION['u_email'])) {
    echo "You are logged in!";
  }
?>
		
</body>
</html>