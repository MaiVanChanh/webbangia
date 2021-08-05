<?php
	 $ung=mysqli_connect("us-cdbr-east-04.cleardb.com","bbea14e2dbb23f","f09cbd95") or die('Không thể kết nối với máy chủ');
	 $strSQL=mysqli_select_db ($ung,"heroku_3b70ef88c110d8b");
	mysqli_query($ung,"SET NAMES 'utf8'");
 

$server_username = "bbea14e2dbb23f";
$server_password = "f09cbd95";
$server_host = "us-cdbr-east-04.cleardb.com"; 
$database = "heroku_3b70ef88c110d8b"; 
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
mysqli_query($conn,"SET NAMES 'UTF8'");
$strSQL=mysqli_select_db ($conn,"heroku_3b70ef88c110d8b");
?>
