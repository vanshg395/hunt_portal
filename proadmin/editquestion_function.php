<?php
require_once('../dbconnect.php');
if (isset($_GET['lvl'])) {
	$lvl = $_GET['lvl'];
}
else {
	echo "No level selected!";
}

if (isset($_POST['submit'])) {
	$level = mysql_real_escape_string($_POST['level']);
	$question = mysql_real_escape_string($_POST['question']);
	$answer = md5(mysql_real_escape_string($_POST['answer']));
	$placeholder = mysql_real_escape_string($_POST['placeholder']);
	$comment1 = mysql_real_escape_string($_POST['comment1']);
	$comment2 = mysql_real_escape_string($_POST['comment2']);
	$html = $_POST['html'];
	$description = mysql_real_escape_string($_POST['description']);

$uploaddir = '../ques/';
$uploadfile = $uploaddir . basename($_FILES['newimage']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['newimage']['tmp_name'], $uploadfile)) {
    // echo "File is valid, and was successfully uploaded.\n";
} else {
    // echo "Possible file upload attack!\n";
   //header("Location: error1.php");
	echo "image wrong";
}

// echo 'Here is some more debugging info:';
// print_r($_FILES);

print "</pre>";

if (!isset($_POST['removeimage']) AND !isset($_FILES["newimage"]["name"])) {
$query = "UPDATE levels SET level='$level',question='$question',answer='$answer',placeholder='$placeholder',comment1='$comment1',comment2='$comment2',html='$html',description='$description' WHERE level='$lvl'";
$result = mysql_query($query);
if ($result) {
	header("Location: levels.php");
     //echo "success1";
}
else {
   echo "error 1";
}

}
elseif (isset($_POST['removeimage'])) {
$emptyimage = "";
$query2 = "UPDATE levels SET level='$level',question='$question',answer='$answer',image='$emptyimage',placeholder='$placeholder',comment1='$comment1',comment2='$comment2',html='$html',description='$description' WHERE level='$lvl'";
$result2 = mysql_query($query2);
if ($result2) {
	header("Location: levels.php");
     //echo "success2";
}
else {
   echo "error 2";
}
}

elseif (isset($_FILES["newimage"]["name"]) AND !isset($_POST['removeimage'])) {
$uploadedimage = basename($_FILES['newimage']['name']);
$query3 = "UPDATE levels SET level='$level',question='$question',answer='$answer',image='$uploadedimage',placeholder='$placeholder',comment1='$comment1',comment2='$comment2',html='$html',description='$description' WHERE level='$lvl'";
$result3 = mysql_query($query3);
if ($result3) {
	header("Location: levels.php");
     //echo "success3";
print_r($result3);
}

}
else {
   echo "error 3";
}

}



 // if(mysql_query("INSERT INTO players(uid,name,email,username,password,status,usertype,ip) VALUES('$uid','$name','$email','$username','$password',1,1,'$ip')"))
 // {
 //  header("Location: index.php");
 // }
 // else
 // {

 //  echo "Error: " . mysql_error();

 // }
else {
echo "Error";
 }
 ?>
