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
<div class="main" style="width:70%;">
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
<h1 class="main-heading">Levels</h1>
<br>
<a style="font-size:20px;" id="link" href="addquestion.php">Add Question</a>
<br><br><br>
<table class="leaderboard" cellspacing="0">
		<th>Level</th>
		<th>Description</th>
        <th>Edit</th>
		<th>Delete</th>
    <?php
    $completed = 20; //Set Last Level
     $result = mysql_query("SELECT * FROM levels ORDER by level");
     while ($row= mysql_fetch_assoc($result)) {
     	$level = $row['level'];
        $description = $row['description'];
     	 if ($level == $completed) {
     	 	$level = "Completed!";
     	 }
     	// $time = $row['time'];
     	echo "<tr class=\"hover\">
     	      <td style=\"font-size:15px;\">{$level}</td>
     	      <td style=\"font-size:15px;\">{$description}</td>
              <td style=\"font-size:15px;\"><a id=\"link\" href=\"editquestion.php?lvl={$level}\">Edit</a></td>
     	      <td style=\"font-size:15px;\"><a id=\"link\" href=\"deletequestion.php?lvl={$level}\" onclick=\"return confirm('Are you sure?')\">Delete</a></td>
     	      </tr>";
     }
     ?>
</table>
<br>
<br><br><br>
<footer>
	<p>&copy; Crypton 2016 | Tech Minds</p>
</footer>
</div>
</center>
</body>
</html>
