<?php
	$username = "root";
	$password = "";
	$hostname = "localhost";
	$database = "hunt";

	ini_set('session.gc_maxlifetime', 3600*3);
	//Connect to DB.
	$dbhandle = mysqli_connect($hostname, $username, $password, $database)
  		or die("Unable to connect to MySQL");


  	// $selected_db = mysqli_select_db($database,$dbhandle)
 		//  or die("Could not select examples");

 	error_reporting(0); 

?>
