<?php

session_start();
header('location:login.php');

$servername = "localhost";
$username = "root";

$con = mysqli_connect($servername, $username);
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'onlinebookzone');

$name = $_POST['name'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$pass = $_POST['password'];


$qy = " SELECT * FROM registration_table  WHERE name = '$name' && user_name = '$user_name' && email = '$email' && pass = '$pass' ";

$result = mysqli_query($con, $qy);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" duplicate data ";
}else{


	$qy= " INSERT  INTO registration_table(name , user_name, email, pass) VALUES ('$name' ,'$user_name' , '$email', '$pass') ";
	mysqli_query($con, $qy);
		echo"done";
}



?>