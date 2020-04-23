<?php 
require_once('dbconnect.php');
if (isset($_POST['email']) and isset($_POST['password'])){
$email = mysql_real_escape_string($_POST['email']);
$password = md5(mysql_real_escape_string($_POST['password']));
$res = mysql_query("SELECT * FROM players WHERE email='$email'"); 
 while($row = mysql_fetch_assoc($res)) {
    $usertype = $row['usertype'];
    $username = $row['username'];
 }

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


$query = "SELECT * FROM `players` WHERE email='$email' and password='$password'";
$result = mysql_query($query) or die(mysql_error());

$count = mysql_num_rows($result);

if ($count == 1){
session_start();
$_SESSION['email'] = $email; 
 if (function_exists('date_default_timezone_set'))
 		{
 			  date_default_timezone_set('Asia/Calcutta');
 			}
 			$date = date('Y-m-d h:i:s A');
mysql_query("INSERT INTO login(email,username,status,ip,time) VALUES('$email','$username','Successful','$ip','$date')");
if ($usertype == 1) {
?>
<script type="text/javascript">window.open("play/play.php","_self")</script>
<?php
}
elseif ($usertype == 2) {
?>
<script type="text/javascript">window.open("proadmin/admin.php","_self")</script>
<?php
}
else{
?>
<script type="text/javascript">window.open("index.php?msg=3","_self")</script>
<?php
}
}
else{
?>
<script type="text/javascript">window.open("index.php?msg=1","_self")</script>
<?php
}

}

?>