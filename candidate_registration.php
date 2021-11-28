<?php

// connect to database
$conn = mysqli_connect('localhost','root','','db_credentials');

//receive form data
$user_name = $_POST['user_name'];
$user_gender = $_POST['user_gender'];
$user_age = $_POST['user_age'];
$user_dob = $_POST['user_dob'];
$user_email = $_POST['user_email'];

//insert into database sql code
$sql = "INSERT INTO users ('user_id','name','gender','age','dob','email') VALUES ('0', '$user_name','$user_gender','$user_age','$user_dob','$user_email')";

//insert in database
$rs = mysqli_query($conn, $sql);

if ($rs)
 {
	echo "Candidate Credentials Registered";
 }else{
	echo "Failed";
 }

?>