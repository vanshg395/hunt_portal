<?php 
require_once('../dbconnect.php');
if (isset($_GET['lvl'])) {
	$lvl = $_GET['lvl'];
}
else {
echo "No level selected!";
}

$query = "DELETE FROM levels WHERE level='$lvl'";
$result = mysql_query($query);
if ($result) {
	header("Location: levels.php");
}
else {
	echo "error! " . mysql_error();
}

 ?>
