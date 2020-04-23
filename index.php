<?php session_start(); ?>
<?php require_once('dbconnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Kryptonite 2016</title>
	<link rel="icon" type="image/x-icon" href="logo.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script type="text/javascript" src="main.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<center>
<div class="main">
<header>
<img src="logo.png" class="logo">
<a href="contact.php">Contact</a>
<a href="leaderboard.php">Leaderboard</a>
<a href="rules.php">Rules</a>
<a href="register.php">Register</a>
<a href="index.php">Home</a>
<div class="clear"></div>
</header>
<br>
<?php
if (isset($_GET['msg'])) {
	$msg = $_GET['msg'];
	if ($msg == 1) {
		$message = "Invalid Username or Password!";
	}
	elseif ($msg == 2) {
		$message = "Captcha not entered!";
	}
	elseif ($msg == 3) {
		$message = "Error";
	}
	elseif ($msg == 4) {
		$message = "Session Ended!";
	}
echo "<p class=\"message\">{$message}</p>";
}
 ?>
<h1 class="main-heading">Login</h1>
<form method="POST" action="login.php">
	<input type="email" name="email" placeholder="Email" class="input" required><br>
	<input type="password" name="password" placeholder="Password" class="input" required><br><br>
	<input type="submit" class="submit" name="submit">
</form>
<br><br><br>
<footer>
	<p>&copy; Kryptonite 2016 | Infinity</p>
</footer>
</div>
</center>
</body>
</html>
