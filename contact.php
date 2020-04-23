<?php require_once('dbconnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Kryptonite 2016</title>
	<link rel="icon" type="image/x-icon" href="logo.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script type="text/javascript" src="main.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
<h1 class="main-heading">Contact</h1>
<div class="card">
				<section id="card">
				<br><br>
				    <img src="admin.jpg" id="sk">
					<br>
				    <h2 id="name">Sayam Kanwar</h2>
				    <i onclick="showMailsk()" class="fa fa-envelope" id="mail"></i>
				    <i onclick="openFbsk()" class="fa fa-facebook" id="fb"></i>
				    <script>
				    function showMailsk() {
				    alert("sayamkanwar616@gmail.com")
				    }
				    </script>
				    <script>
				    function openFbsk() {
				    window.open("https://www.facebook.com/proquizzer")
				    }
				    </script>
				    <br><br>
				</section>
			</div>
<div class="clear"></div>
<br><br><br>
<footer>
	<p>&copy; Kryptonite 2016 | Infinity</p>
</footer>
</div>
</center>
</body>
</html>
