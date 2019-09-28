<?php

session_start();


$servername = "localhost";
$username = "root";

$con = mysqli_connect($servername, $username);
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'onlinebookzone');


$user_name = $_POST['user_name'];

$pass = $_POST['password'];


$qy = " SELECT * FROM registration_table  WHERE user_name = '$user_name' && pass = '$pass' ";

$result = mysqli_query($con, $qy);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['user_name']= $user_name;
	header('location:index.php');
}else{

header('location:login.php');
}



?>