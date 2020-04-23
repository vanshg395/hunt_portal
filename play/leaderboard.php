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
<h1 class="main-heading">Leaderboard</h1>
<table class="leaderboard" border="0" cellspacing="0">
        <th>Rank</th>
        <th>Username</th>
        <th>Level</th>
        <th>Last Level Completed At</th>

    <?php
    echo "<tr class=\"admin-td\">
					<td style=\"font-size:15px;\">&#x221e;</td>
					<td style=\"font-size:15px;\">sk</td>
					<td style=\"font-size:15px;\">&#x221e;</td>
					<td style=\"font-size:15px;\">&#x221e;</td>
					</tr>";
    $rank = 1;
    $completed = 20; //Set Last Level
     $result = mysql_query("SELECT * FROM players WHERE status=1 AND usertype=1 ORDER by level DESC,time");
     while ($row = mysql_fetch_assoc($result)) {
        $username = $row['username'];
        $level = $row['level'];
        if ($level == $completed) {
            $level = "Completed!";
        }
				$time = $row['time'];
	     	echo "<tr class=\"hover\">
	     	      <td style=\"font-size:15px;\">{$rank}</td>
	     	      <td style=\"font-size:15px;\">{$username}</td>
	     	      <td style=\"font-size:15px;\">{$level}</td>
	     	      <td style=\"font-size:15px;\">{$time}</td>
	     	      </tr>";
	     $rank++;
     }
     ?>
</table>
<?php

 // if (function_exists('date_default_timezone_set'))
    //      {
 //               date_default_timezone_set('Asia/Calcutta');
 //             }
 //             $date = date('h:i:s A | d/m/Y');
 //            echo $date;

 ?>
<br><br><br>
<footer>
	<p>&copy; Kryptonite 2016 | Infinity</p>
</footer>
</div>
</center>
<!-- <?php echo $comment2; ?> -->
</body>
</html>
