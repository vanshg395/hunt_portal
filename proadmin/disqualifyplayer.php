<?php 
require_once('../dbconnect.php');
if (isset($_GET['uid'])) {
	$uid = $_GET['uid'];
}
else {
echo "No user selected!";
}

$query = "UPDATE players SET status='0' WHERE uid='$uid'";
$result = mysql_query($query);
if ($result) {
	header("Location: players.php");
}
else {
	echo "error!" . mysql_error();
}

 ?>
