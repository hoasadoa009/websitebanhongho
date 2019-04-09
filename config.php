<?php 
	//file config.php chua thong tin ket noi csdl
	$hostname = "localhost";
	$user = "root";
	$password = "";
	$database = "qlbanhang";
	//thuc hien ket noi
	$db = mysqli_connect($hostname,$user,$password,$database);
	//set charset
	mysqli_set_charset($db,"UTF8");
 ?>