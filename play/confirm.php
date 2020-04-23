<?php require_once('../dbconnect.php'); ?>
<?php
session_start();
if (!isset($_SESSION['email'])) {
header("Location: ../index.php?msg=4");
exit();
}
else {
echo "";
}

$initialresult = mysql_query("SELECT * FROM players WHERE email='".$_SESSION['email']."'");
 while($row = mysql_fetch_assoc($initialresult)) {
     $status = $row['status'];
     $confirm = $row['confirm'];
 }

 if ($confirm == 1) {
		header("Location: play.php");
}
else {
	echo "";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Kryptonite 2016</title>
	<link rel="icon" type="image/x-icon" href="../logo.png">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script type="text/javascript" src="../main.js"></script>

</head>
<body>
<center>
<div class="main">
<header>
<img src="../logo.png" class="logo">
<a href="logout.php">Logout</a>
<a href="contact.php">Contact</a>
<a href="leaderboard.php">Leaderboard</a>
<a href="rules.php">Rules</a>
<a href="play.php">Play</a>
<div class="clear"></div>
</header>
<br>
<?php
if (isset($_GET['msg'])) {
	$msg = $_GET['msg'];
	if ($msg == 1) {
		// $message = "Correct Answer!";
		echo "<body onload=\"correctAnswer();\">";
	}
	elseif ($msg == 2) {
		//$message = "Wrong Answer!";
        echo "<body onload=\"wrongAnswer();\">";
	}
//echo "<p class=\"message\">{$message}</p>";
}
 ?>
<!-- <p class="message"></p> -->
<br><br><br><br><br>
<h1 class="main-heading">Please confirm your email!</h1>
<p>We have sent a mail to your email address, please confirm it!</p>
<br><br><br><br><br><br><br><br><br><br><br>
<footer>
	<p>&copy; Kryptonite 2016 | Infinity</p>
</footer>
</div>
</center>
</body>
</html>
