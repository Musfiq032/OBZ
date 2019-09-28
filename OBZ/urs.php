<?php
session_start();
header('location:services.php');
$servername = "localhost";
$username = "root";

$con = mysqli_connect($servername, $username);
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'onlinebookzone');

$book_name = $_POST['book_name'];
$writer_name = $_POST['writer_name'];
$publisher_name = $_POST['publisher_name'];
$description = $_POST['description'];


$qy = " SELECT * FROM user_request  WHERE book_name = '$book_name' && writers_name = '$writer_name' && publishers_name = '$publisher_name' && description = '$description' ";

$result = mysqli_query($con, $qy);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" duplicate data ";
}else{


	$qy= " INSERT  INTO user_request(book_name , writers_name, publishers_name, description) VALUES ('$book_name' ,'$writer_name' , '$publisher_name', '$description') ";
	mysqli_query($con, $qy);
	$_bookname['book_name']= $book_name;

		
}



?>