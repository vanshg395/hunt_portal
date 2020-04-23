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
     $usertype = $row['usertype'];
 }

 if ($usertype == 1) {
 	header("Location: ../index.php?msg=4");
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

?>
<!DOCTYPE html>
<html>
<head>
	<title>Kryptonite 2016</title>
	<link rel="icon" type="image/x-icon" href="../logo.png">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script type="text/javascript" src="../main.js"></script>
	<script type="text/javascript">
    function correctAnswer() {
     $('.correct').fadeIn(20);
setTimeout(function() {

        $('.correct').fadeOut();

      }, 1000);
    }

    function wrongAnswer() {
    $('.wrong').fadeIn();
setTimeout(function() {

        $('.wrong').fadeOut();

      }, 750);
    }

	</script>
	<script type="text/javascript">
var wasPressed = false;
document.onkeydown = f1;
document.onkeydown = f2;

jQuery(document).on("keydown",f3);
jQuery(document).on("keydown",f4);
function f1(e){
e = e || window.event;
if( wasPressed ) return;

        if (e.keyCode == 116) {
             window.open("play.php","_self");
            wasPressed = true;
        }
}
	</script>
</head>
<body>
<center>
<div class="main">
<header>
<img src="../logo.png" class="logo">
<a href="logout.php">Logout</a>
<a href="settings.php">Settings</a>
<a href="levels.php">Levels</a>
<a href="logs.php">Logs</a>
<a href="players.php">Players</a>
<a href="admin.php">Home</a>
<div class="clear"></div>
</header>
<br>
<h1 class="main-heading">Leaderboard</h1>
<table class="leaderboard" border="0" cellspacing="0">
		<th>Rank</th>
		<th>Username</th>
    <th>Level</th>
		<th>Class</th>
		<th>Last Level Time</th>
    <?php
    $rank = 1;
    $completed = 20; //Set Last Level
     $result = mysql_query("SELECT * FROM players WHERE status=1 AND usertype=1 ORDER by level DESC,time");
     while ($row = mysql_fetch_assoc($result)) {
     	$name = $row['name'];
      $player = $row['username'];
      $level = $row['level'];
     	$class = $row['class'];
     	if ($level == $completed) {
     		$level = "Completed!";
     	}
     	$time = $row['time'];
      echo "<tr class=\"hover\">
            <td style=\"font-size:15px;\">{$rank}</td>
            <td style=\"font-size:15px;\">{$player}</td>
            <td style=\"font-size:15px;\">{$level}</td>
            <td style=\"font-size:15px;\">{$class}</td>
            <td style=\"font-size:15px;\">{$time}</td>
            </tr>";
     $rank++;
     }
     ?>
</table>
<?php

 // if (function_exists('date_default_timezone_set'))
	// 		{
 // 			  date_default_timezone_set('Asia/Calcutta');
 // 			}
 // 			$date = date('h:i:s A | d/m/Y');
 //            echo $date;

 ?>
<br><br><br>
<footer>
	<p>&copy; Crypton 2016 | Tech Minds</p>
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
