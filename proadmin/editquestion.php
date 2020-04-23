<?php require_once('../dbconnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Kryptonite 2016</title>
	<link rel="icon" type="image/x-icon" href="../logo.png">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script type="text/javascript" src="../main.js"></script>
	<script type="text/javascript">
      function cancel() {
      	window.open("levels.php","_self");
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
<?php
if (isset($_GET['lvl'])) {
  $lvl = $_GET['lvl'];
}
else {
echo "No level selected!";
}

     $result4 = mysql_query("SELECT * FROM levels WHERE level='$lvl'");
     while($row4 = mysql_fetch_assoc($result4)) {
     $level = $row4['level'];
     $question = $row4['question'];
     $placeholder = $row4['placeholder'];
     $answer = $row4['answer'];
     $comment1 = $row4['comment1'];
     $comment2 = $row4['comment2'];
     $html = $row4['html'];
     $description = $row4['description'];
     $image = $row4['image'];
 }

 ?>
<h1 class="main-heading">Edit Question</h1>
<form method="POST" action="editquestion_function.php?lvl=<?php echo $lvl; ?>" enctype="multipart/form-data">
    <input type="number" name="level" placeholder="Level" value="<?php echo $level; ?>" class="input"><br>
	<input type="question" name="question" placeholder="Question" value="<?php echo $question; ?>" class="input"><br>
	<input type="text" name="answer" placeholder="New Answer" class="input"><br>
	<?php
    if (empty($image)) {
    	echo "<input type=\"file\" name=\"newimage\" style=\"width:170px;\" class=\"input\"><br>";
    }
    else {
    	echo "";
    }
	 ?>
	<input type="text" name="placeholder" placeholder="Placeholder" value="<?php echo $placeholder; ?>" class="input"><br>
	<input type="text" name="comment1" placeholder="Comment 1" value="<?php echo $comment1; ?>" class="input"><br>
	<input type="text" name="comment2" placeholder="Comment 2" value="<?php echo $comment2; ?>" class="input"><br>
	<input type="html" name="html" placeholder="Html" value="<?php echo $html; ?>" class="input"><br>
	<input type="text" name="description" placeholder="Description" value="<?php echo $description; ?>" class="input"><br><br><br>
		<?php
    if (!empty($image)) {
    	echo "<input type=\"checkbox\" name=\"removeimage\" value=\"1\">Remove Image<br><br><br>";
    	echo "<img src=\"../ques/{$image}\" class=\"image\"><br><br>";
    }
    else {
    	echo "";
    }
	 ?>
	<input type="submit" class="submit" name="submit"><br>
</form>
<button onclick="cancel();">CANCEL</button>
<br><br><br>
<footer>
	<p>&copy; Crypton 2016 | Tech Minds</p>
</footer>
</div>
</center>
</body>
</html>
