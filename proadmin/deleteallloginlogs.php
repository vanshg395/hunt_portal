<?php 
require_once('../dbconnect.php');

$query = "DELETE FROM login";
$result = mysql_query($query);
if ($result) {
	header("Location: settings.php?msg=3");
}
else {
	echo "Login Logs Error!";
}

 ?>
