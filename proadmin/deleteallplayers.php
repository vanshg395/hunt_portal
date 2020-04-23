<?php 
require_once('../dbconnect.php');

$query = "DELETE FROM players WHERE usertype=1";
$result = mysql_query($query);
if ($result) {
	header("Location: settings.php?msg=1");
}
else {
	echo "Player Error!";
}

 ?>
