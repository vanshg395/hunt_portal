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
<?php
if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
    if ($msg == 1) {
        $message = "All Players Deleted!";
    }
    elseif ($msg == 2) {
        $message = "All Submit Logs Deleted!";
    }
    elseif ($msg == 3) {
        $message = "All Login Logs Deleted!";
    }
    elseif ($msg == 4) {
        $message = "All Levels Deleted!";
    }
echo "<p class=\"message\">{$message}</p>";
}
 ?>
 <br>
<h1 class="main-heading">Settings</h1>
<br>
<a id="link" style="font-size:25px;" href="deleteallplayers.php" onclick="return confirm('Are you sure?')">Delete All Players</a><br><br>
<a id="link" style="font-size:25px;" href="deleteallsubmitlogs.php" onclick="return confirm('Are you sure?')">Delete All Submit Logs</a><br><br>
<a id="link" style="font-size:25px;" href="deleteallloginlogs.php" onclick="return confirm('Are you sure?')">Delete All Login Logs</a><br><br>
<a id="link" style="font-size:25px;" href="deleteallquestions.php" onclick="return confirm('Are you sure?')">Delete All Questions</a><br><br>
<a id="link" style="font-size:25px;" onclick="adminPass()">Change Admin Password</a><br><br>
<br><br><br><br><br><br><br>
<footer>
	<p>&copy; Crypton 2016 | Tech Minds</p>
</footer>
</div>
</center>
<script type="text/javascript">

    function sendRequest(newstr) {
        var ns = "new="+newstr;
        $.ajax({
            type: "POST",
            url: "changepasswd.php",
            data: ns,
            success:function(r){
                console.log(r);
            }
        });
    }

    function adminPass() {
        var newpass = prompt("Please enter the new password");
        sendRequest(newpass);
    }
</script>
</body>
</html>
