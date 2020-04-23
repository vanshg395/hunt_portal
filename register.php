<?php require_once('dbconnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Kryptonite 2016</title>
	<link rel="icon" type="image/x-icon" href="logo.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script type="text/javascript" src="main.js"></script>
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
		$message = "Successfully Registered!";
	}
	elseif ($msg == 2) {
		$message = "Error!";
	}
	elseif ($msg == 3) {
		$message = "Username already exists!";
	}
	elseif ($msg == 4) {
		$message = "An account with this email address already exists!";
	}
	elseif ($msg == 5) {
		$message = "Username can be maximum of 8 letters!";
	}
echo "<p class=\"message\">{$message}</p>";
}
 ?>
<h1 class="main-heading">Register</h1>
<form method="POST" action="register_function.php">
    <input type="text" name="name" placeholder="Name" style="text-transform:capitalize;" class="input" required><br>
		<input type="email" name="email" placeholder="Email" class="input" required><br>
		<input type="text" name="school" placeholder="School" class="input" required><br>
    <select style="width:160px;height:50px;" class="input" name="class" required>
			<option>-- Select your class --</option>
			<option value="5">V</option>
			<option value="6">VI</option>
			<option value="7">VII</option>
			<option value="8">VIII</option>
			<option value="9">IX</option>
			<option value="10">X</option>
	 </select><br>
	<input type="text" name="username" maxlength="8" placeholder="Username (Max: 8 Letters)" class="input" required><br>
	<input type="password" name="password" placeholder="Password" class="input" required><br>
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
