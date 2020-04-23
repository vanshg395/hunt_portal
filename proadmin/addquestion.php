<?php require_once('../dbconnect.php'); ?>
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
<a href="settings.php">Settings</a>
<a href="levels.php">Levels</a>
<a href="logs.php">Logs</a>
<a href="players.php">Players</a>
<a href="admin.php">Home</a>
<div class="clear"></div>
</header>
<br>
<?php
if (isset($_GET['msg'])) {
	$msg = $_GET['msg'];
	if ($msg == 1) {
		$message = "Question Added!";
	}
	elseif ($msg == 2) {
		$message = "Question Not Added!";
	}
echo "<p class=\"message\">{$message}</p>";
}


 ?>
<h1 class="main-heading">Add Question</h1>
<?php
$result = mysql_query("SELECT * FROM levels");
while ($row= mysql_fetch_assoc($result)) {
 $lastlevel = $row['level'];
 }
 $newlevel = $lastlevel+1;
 // echo $newlevel;
 ?>
<form method="POST" action="addquestion_function.php" enctype="multipart/form-data">
    <input type="number" name="level" placeholder="Level" value="<?php echo $newlevel; ?>" class="input" required><br>
	<input type="question" name="question" placeholder="Question" class="input"><br>
	<input type="text" name="answer" placeholder="Answer" class="input" required><br>
	<input type="file" name="image" style="width:170px;" class="input"><br>
	<input type="text" name="placeholder" placeholder="Placeholder" class="input"><br>
	<input type="text" name="comment1" placeholder="Comment 1" class="input"><br>
	<input type="text" name="comment2" placeholder="Comment 2" class="input"><br>
	<input type="html" name="html" placeholder="Html" class="input"><br>
	<input type="text" name="description" placeholder="Description" class="input"><br>
	<input type="submit" class="submit" name="submit">
</form>
<br><br><br>
<footer>
	<p>&copy; Crypton 2016 | Tech Minds</p>
</footer>
</div>
</center>
</body>
</html>
