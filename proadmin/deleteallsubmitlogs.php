<?php 
require_once('../dbconnect.php');

$query = "DELETE FROM submits";
$result = mysql_query($query);
if ($result) {
	header("Location: settings.php?msg=2");
}
else {
	echo "Submit Logs Error!";
}

 ?>
