<?php 
require_once('../dbconnect.php');

$query = "DELETE FROM levels";
$result = mysql_query($query);
if ($result) {
	header("Location: settings.php?msg=4");
}
else {
	echo "Levels Error!";
}

 ?>
