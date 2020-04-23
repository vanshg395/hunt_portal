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
<h1 class="main-heading">Logs</h1>
<br>
<hr>
<h1 class="main-heading">Login Logs</h1>
<table border="1" cellpadding="20" cellspacing="0">
    <tr>
        <th>Serial</th>
        <th>Email</th>
        <th>Username</th>
        <th>Status</th>
        <th>Time</th>
        <th>IP</th>
    </tr>
    <?php
     $serial = 1;
     $result3 = mysql_query("SELECT * FROM login ORDER by time DESC");
     while($row3 = mysql_fetch_assoc($result3)) {
     $username = $row3['username'];
     $email = $row3['email'];
     $time = $row3['time'];
     $ip = $row3['ip'];
     $status = $row3['status'];
     echo "<tr>
           <td>{$serial}</td>
           <td>{$email}</td>
           <td>{$username}</td>
           <td>{$status}</td>
           <td>{$time}</td>
           <td>{$ip}</td>
           </tr>";
    $serial++;
     }
     ?>
</table>
<br><br><br><br>
<hr>
<h1 class="main-heading">Submit Logs</h1>
<table border="1" cellpadding="20" cellspacing="0">
    <tr>
        <th>Serial</th>
        <th>Username</th>
        <th>Answer</th>
        <th>Level</th>
        <th>Status</th>
        <th>Time</th>
        <th>IP</th>
    </tr>
    <?php
     $serial = 1;
     $result4 = mysql_query("SELECT * FROM submits ORDER by time DESC");
     while($row4 = mysql_fetch_assoc($result4)) {
     $username = $row4['username'];
     $time = $row4['time'];
     $email = $row4['email'];
     $ip = $row4['ip'];
     $answer = $row4['answer'];
     $level = $row4['level'];
     $status = $row4['status'];
     echo "<tr>
           <td>{$serial}</td>
           <td>{$username}</td>
           <td>{$answer}</td>
           <td>{$level}</td>
           <td>{$status}</td>
           <td>{$time}</td>
           <td>{$ip}</td>
           </tr>";
    $serial++;
     }
     ?>
</table>
<br><br><br>
<footer>
	<p>&copy; Crypton 2016 | Tech Minds</p>
</footer>
</div>
</center>
</body>
</html>
