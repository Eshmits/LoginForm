<?php 
session_start();
include('server.php') 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log Reg</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div id="box">
        <div id="login_msg">Have an account?</div>
        <div id="signup_msg">Don't have an account?</div>            
        <img id="login_btn" src="images/login1.png">
        <img id="signup_btn" src="images/sign2.png"> 
    </div>
    <div id="main">
        <div id="loginform">
            <form action="login.php" method="POST">
            <h1>LOGIN</h1>
            <input class="email" type="text" name="email" placeholder="Email"><br>
            <input class="pass" type="password" name="pass" placeholder="Password"><br>
            <button type="submit" name="submit" class="btn1">LOGIN</button>
            <img class="mail1" src="images/mail1.png">
            <img class="pass1" src="images/pass1.png">
        </form>
        </div>          

        <div id="signupform">
            <form action="signup.php" method="POST">
            <h1>SIGN UP</h1>                    
            <input class="user" type="text" name="name" placeholder="Name"><br>
            <input class="email" type="text" name="email" placeholder="Email"><br>
            <input class="pass" name="pass" type="password" placeholder="Password"><br>
            <button type="submit" name="submit" class="btn2">SIGN UP</button>
            <img class="user1" src="images/user1.png">
            <img class="mail2" src="images/mail1.png">
            <img class="pass2" src="images/pass1.png">
            </form>
        </div>
    </div>
	
<script src="jquery.js"></script>
</body>
</html>