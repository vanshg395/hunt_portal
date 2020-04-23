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

 if ($status == 0) {
     header("Location: disqualified.php");
 }
 else {
 	echo "";
 }

  if ($confirm == 0) {
     header("Location: confirm.php");
 }
 else {
 	echo "";
 }


$result = mysql_query("SELECT * FROM players WHERE email='".$_SESSION['email']."'");
 while($row = mysql_fetch_assoc($result)) {
     $level = $row['level'];
     $uid = $row['uid'];
 }

$result2 = mysql_query("SELECT * FROM levels WHERE level='$level'");
 while($row2 = mysql_fetch_assoc($result2)) {
     $question = $row2['question'];
     $image = $row2['image'];
     $placeholder = $row2['placeholder'];
     $comment1 = $row2['comment1'];
     $comment2 = $row2['comment2'];
     $html = $row2['html'];
 }

 if ($placeholder == "") {
 	$placeholder = "Answer";
 }

// if ($_GET['lvl']) {
// 	$lvl = $_GET['lvl'];
// }
// else {
// 	echo "No level set!";
// }

// if ($_GET['uid']) {
// 	$uid = $_GET['uid'];
// }
// else {
// 	echo "No user set!";
// }


$res2 = mysql_query("SELECT * FROM players WHERE email='".$_SESSION['email']."'");
 while($row = mysql_fetch_assoc($res2)) {
    $uid = $row['uid'];
    $lvl = $row['level'];
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
	$message = "Wrong Answer!";
	}
echo "<p class=\"message2\">{$message}</p>";
}
 ?>
<h1 class="main-heading">Level <?php echo $level; ?></h1>
<br>
<!-- <?php echo $comment1; ?> -->
<form method="POST" action="checkanswer.php">
 	<div class="question">
		<?php if (!empty($question)) {
		echo "<p>{$question}</p>";
		} ?>
		<?php if (!empty($image)) {
		echo "<img src=\"../ques/{$image}\">";
		} ?>
	<p><?php if (!empty($html)) {
		echo "<p>{$html}</p>";
		} ?></p>
	</div>
	<input type="text" class="input" id="answer" name="answer" style="width:170px;" placeholder="<?php echo $placeholder; ?>" required><br>
	<input type="submit" class="submit" name="submit"><br>
	<p class="status"></p>
</form>
<br><br><br>
<footer>
  <p>&copy; Kryptonite 2016 | Infinity</p>
</footer>
</div>
</center>
<!-- <?php echo $comment2; ?> -->
<div class="correct">
<center>
	<h1>Correct Answer!</h1>
</center>
</div>
<div class="wrong">
<center>
	<h1>Wrong Answer!</h1>
</center>
</div>
</body>
</html>
