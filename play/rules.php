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
 }

 if ($status == 2) {
     header("Location: disqualified.php");
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
<h1 class="main-heading">Rules</h1>
<ul style="float:left; text-align:justify;">
	<li class="rule">The hunt starts on <b>20th July 2016 at 12:00:01 AM</b> and ends on <b>24th July 2016 at 11:59:59 PM</b>.</li>
	<li class="rule">The answers can contain special characters and alphanumeric values. The website automatically removes spaces and capital letters from the answer. So if the answer is <b> crypton2016 </b> and you enter <b> c   r  y P t On 20  1 6 </b>, the answer will be accepted as <b>crypton2016</b>. But we cannot autocorrect wrong spellings, so make sure you are putting in the right spelling.</li>
    <li class="rule">The recommended web browser for the hunt is Google Chrome.</li>
    <li class="rule">This hunt is made to test the knowledge, creativity and lateral thinking skills of the participant.</li>
    <li class="rule">You are free to search the web, <b>Google is your best friend</b>.</li>
    <li class="rule">Hints are scattered everywhere including the source code, image names, etc.</li>
    <li class="rule">Ranks are the based upon the number of levels solved and the time at which you solved the previous level (lower time is better).</li>
    <li class="rule">Cheating/SQL Injection would lead to immediate disqualification.</li>
    <li class="rule">If you have any doubts or face any technical issues, please contact the admin.</li>
    <li class="rule">May the force be with you.</li>
</ul>
<div class="clear"></div>
<br><br><br>
<footer>
  <p>&copy; Kryptonite 2016 | Infinity</p>
</footer>
</div>
</center>
<!-- <?php echo $comment2; ?> -->
</body>
</html>
