<?php
require_once('dbconnect.php');
if (isset($_POST['submit'])) {
	$uid = rand(10000000, 100000000);
	$name = mysql_real_escape_string($_POST['name']);
	$username = mysql_real_escape_string($_POST['username']);
	$class = mysql_real_escape_string($_POST['class']);
	$email = mysql_real_escape_string($_POST['email']);
	$school = mysql_real_escape_string($_POST['school']);
	$password = md5(mysql_real_escape_string($_POST['password']));
    $ip = "";



if (!empty($_SERVER["HTTP_CLIENT_IP"]))
{
 //check for ip from share internet
 $ip = $_SERVER["HTTP_CLIENT_IP"];
}
elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
{
 // Check for the Proxy User
 $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else
{
 $ip = $_SERVER["REMOTE_ADDR"];
}
$perfect=0;
$userlength = strlen($username);
echo $userlength;
if ($userlength>8) {
	header("location: register.php?msg=5");
}
else {
	$result3 = mysql_query("SELECT * FROM players");
	while ($row3 = mysql_fetch_assoc($result3)) {
	 $regusername = $row3['username'];

	 if($username == $regusername) {
		 $perfect=0;
		header("location: register.php?msg=3");
	 }
	 else {
	 	$perfect = 1;
	 }

	 }

	 echo "Perfect: " . $perfect;

	 if($perfect==1) {
		 $query = "INSERT INTO players(uid,name,email,username,password,class,status,usertype,confirm,ip) VALUES('$uid','$name','$email','$username','$password','$class','1','1','1','$ip')";
			$result = mysql_query($query);
			if ($result) {
				header("Location: register.php?msg=1");
		echo "Success register!";
			}
			else {
				header("Location: register.php?msg=2");
			}

			}
			else {
			echo "Error";
			 }
	 }
}


 ?>
