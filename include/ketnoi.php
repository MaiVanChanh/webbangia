<?php
	 $ung=mysqli_connect("localhost","root","") or die('Khong The Ket Noi Voi May Chu');
	 $strSQL=mysqli_select_db ($ung,"giayda");
	mysqli_query($ung,"SET NAMES 'utf8'");
 

$server_username = "root";
$server_password = "";
$server_host = "localhost"; 
$database = "giayda"; 
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
mysqli_query($conn,"SET NAMES 'UTF8'");
$strSQL=mysqli_select_db ($conn,"giayda");
?>