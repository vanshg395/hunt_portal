<?php 
require_once('../dbconnect.php');
$new = $_POST['new'];
$new = md5($new);
echo $new;
$sql = "UPDATE players SET password='$new' WHERE email='admin@hunt.com'";
mysql_query($sql);
?>