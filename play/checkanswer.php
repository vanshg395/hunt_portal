 <?php
require_once('../dbconnect.php');
session_start();
// if ($_GET['lvl']) {
// 	$lvl = $_GET['lvl'];
// }
// else {
// 	echo "No level set!";
// }

// if ($_GET['uid']) {
// 	$uid = $_GET['uid'];
// }
// else {
// 	echo "No user set!";
// }

$res2 = mysql_query("SELECT * FROM players WHERE email='".$_SESSION['email']."'");
 while($row = mysql_fetch_assoc($res2)) {
    $uid = $row['uid'];
    $lvl = $row['level'];
 }

 // print_r($res2);

if (isset($_POST['submit'])){
$answer = md5(mysql_real_escape_string($_POST['answer']));
$res = mysql_query("SELECT * FROM levels WHERE level='$lvl'");
 while($row = mysql_fetch_assoc($res)) {
    $correctanswer = $row['answer'];
    $level = $row['level'];
 }

$result = mysql_query("SELECT * FROM players WHERE uid='$uid'");
 while($row = mysql_fetch_assoc($result)) {
    $email = $row['email'];
    $username = $row['username'];
    $level = $row['level'];
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

 if (function_exists('date_default_timezone_set'))
 		{
 			  date_default_timezone_set('Asia/Calcutta');
 			}
 			$date = date('Y-m-d h:i:s');
if ($answer == $correctanswer) {
	// $response["correct"] = 1;
	header("Location: play.php");
	$newlevel = $level + 1;
	$query = "UPDATE `players` SET `level` = '{$newlevel}' , time = '{$date}' WHERE `uid` = '{$uid}'";
	$result = mysql_query($query);
	$query2 = "INSERT INTO submits(email,username,answer,level,status,ip,time) VALUES ('$email','$username','$answer','$level','Correct Answer','$ip','$date')";
	$result2 = mysql_query($query2);
}
else {
	// $response["correct"] = 0;
	header("Location: play.php?msg=1");
	$submitted_ans = $_POST['answer'];
	$query3 = "INSERT INTO submits(email,username,answer,level,status,ip,time) VALUES ('$email','$username','$submitted_ans','$level','Wrong Answer','$ip','$date')";
	$result3 = mysql_query($query3);
}

}
?>
