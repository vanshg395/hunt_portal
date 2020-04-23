<?php
require_once('dbconnect.php');
if (isset($_POST['submit'])) {
	$pusername = mysql_real_escape_string($_POST['username']);
	$pemail = mysql_real_escape_string($_POST['email']);

 $userlength = count($pusername);
 $ok1 = 0;
$ok2 = 0;
	$result = mysql_query("SELECT * FROM players");
	while ($row= mysql_fetch_assoc($result)) {
	 $regusername = $row['username'];
	 $regemail = $row['email'];

	 //Username Check
	 if ($userlength > 8) {
	 	header("location: register.php?msg=5");
	 }
	 else {
		 if ($pusername == $regusername) {
			 header("location: register.php?msg=3");
		 }
		 else {
		 	$ok1=1;
		 }
	 }

	 //Email Check
	 if ($pemail == $regemail) {
		 header("location: register.php?msg=4");
	 }
	 else {
	 	$ok2=1;
	 }

	 }

	 if ($ok1 == 1 || $ok2 == 1) {
	 	header("location: register_function.php");
	 }

}
 ?>
