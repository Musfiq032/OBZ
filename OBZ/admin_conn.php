<?php

session_start();
header('location:admin_panel.php');


$servername = "localhost";
$username = "root";

$con = mysqli_connect($servername, $username);
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'onlinebookzone');


$admin_name = $_POST['admin_name'];

$admin_pass = $_POST['admin_password'];


$qy = " SELECT * FROM admin  WHERE admin_name = '$admin_name' && admin_pass = '$admin_pass' ";

$result = mysqli_query($con, $qy);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['admin_name']= $admin_name;
	header('location:admin_panel.php');
}else{

header('location:login.php');
}



?>