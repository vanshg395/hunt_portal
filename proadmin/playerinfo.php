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

if (isset($_GET['uid'])) {
    $uid = $_GET['uid'];
}
else {
    echo "No user selected!";
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


$result = mysql_query("SELECT * FROM players WHERE uid='$uid'");
 while($row = mysql_fetch_assoc($result)) {
     $level = $row['level'];
     $uid = $row['uid'];
     $name = $row['name'];
     $username = $row['username'];
     $email = $row['email'];
     $ip = $row['ip'];
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
<h1 class="main-heading">Player Info</h1>
<p>Name: <?php echo $name; ?></p>
<p>Username: <?php echo $username; ?></p>
<p>Email: <?php echo $email; ?></p>
<p>Level: <?php echo $level; ?></p>
<p>IP: <?php echo $ip; ?></p>
<br><br><br>
<hr>
<h1 class="main-heading">Login Logs</h1>
<table border="1" cellpadding="20" cellspacing="0">
    <tr>
        <th>Serial</th>
        <th>Time</th>
        <th>Status</th>
        <th>IP</th>
    </tr>
    <?php
     $serial = 1;
     $result3 = mysql_query("SELECT * FROM login WHERE email='$email' ORDER by time DESC");
     while($row3 = mysql_fetch_assoc($result3)) {
     $username = $row3['username'];
     $time = $row3['time'];
     $ip = $row3['ip'];
     $status = $row3['status'];
     echo "<tr>
           <td>{$serial}</td>
           <td>{$time}</td>
           <td>{$status}</td>
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
        <th>Answer</th>
        <th>Level</th>
        <th>Time</th>
        <th>Status</th>
        <th>IP</th>
    </tr>
    <?php
     $serial = 1;
     $result4 = mysql_query("SELECT * FROM submits WHERE email='$email' ORDER by time DESC");
     while($row4 = mysql_fetch_assoc($result4)) {
     $username = $row4['username'];
     $time = $row4['time'];
     $ip = $row4['ip'];
     $answer = $row4['answer'];
     $level = $row4['level'];
     $status = $row4['status'];
     echo "<tr>
           <td>{$serial}</td>
           <td>{$answer}</td>
           <td>{$level}</td>
           <td>{$time}</td>
           <td>{$status}</td>
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
