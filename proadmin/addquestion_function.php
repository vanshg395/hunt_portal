<?php
require_once('../dbconnect.php');
if (isset($_POST['submit'])) {

	$uploaddir = '../ques/';
	$uploadfile = $uploaddir . basename($_FILES['image']['name']);

	echo '<pre>';
	if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
	     echo "File is valid, and was successfully uploaded.\n";
	} else {
	     echo "Nahi hui upload!\n";
	}

	// echo 'Here is some more debugging info:';
	print_r($_FILES);

	print "</pre>";

	$level = mysql_real_escape_string($_POST['level']);
	$question = mysql_real_escape_string($_POST['question']);
	$answer = md5(mysql_real_escape_string($_POST['answer']));
	$image = basename($_FILES['image']['name']);
	$placeholder = mysql_real_escape_string($_POST['placeholder']);
	$comment1 = mysql_real_escape_string($_POST['comment1']);
	$comment2 = mysql_real_escape_string($_POST['comment2']);
	$html = $_POST['html'];
	$description = mysql_real_escape_string($_POST['description']);



$query = "INSERT INTO levels(level,question,answer,image,placeholder,comment1,comment2,html,description) VALUES('$level','$question','$answer','$image','$placeholder','$comment1','$comment2','$html','$description')";
$result = mysql_query($query);
if ($result) {
	header("Location: levels.php");
    // echo "success";
}
else {
	// header("Location: ");
    echo "error creating question: " . mysql_error();
}

 // if(mysql_query("INSERT INTO players(uid,name,email,username,password,status,usertype,ip) VALUES('$uid','$name','$email','$username','$password',1,1,'$ip')"))
 // {
 //  header("Location: index.php");
 // }
 // else
 // {

 //  echo "Error: " . mysql_error();

 // }
}
else {
echo "Error";
 }
 ?>
