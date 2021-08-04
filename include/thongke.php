<?php
	//dem so loai giay
	$strSQL="SELECT COUNT(*) FROM loai_giay";
	$so_loai_giay=mysqli_query($conn,$strSQL);
	$rowLOAI=mysqli_fetch_array($so_loai_giay);
	$soloaigiay=$rowLOAI[0];
	//dem so giay
	$strSQL="SELECT COUNT(*) FROM giay";
	$so_giay=mysqli_query($conn,$strSQL);
	$rowgiay=mysqli_fetch_array($so_giay);
	$sogiay=$rowgiay[0];
	//dem so khach hang
	$strSQL="SELECT COUNT(*) FROM khach_hang";
	$khach_hang=mysqli_query($conn,$strSQL);
	$rowKHACH=mysqli_fetch_array($khach_hang);
	$khachhang=$rowKHACH[0];
	//dem so tin tuc
	$strSQL="SELECT COUNT(*) FROM tin_tuc";
	$tin_tuc=mysqli_query($conn,$strSQL);
	$rowTIN=mysqli_fetch_array($tin_tuc);
	$tintuc=$rowTIN[0];
	//dem so lien he
	$strSQL="SELECT COUNT(*) FROM lien_he";
	$lien_he=mysqli_query($conn,$strSQL);
	$rowLH=mysqli_fetch_array($lien_he);
	$lienhe=$rowLH[0];
	//dem so don dat hang
	$strSQL="SELECT COUNT(*) FROM dondathang";
	$dondathang=mysqli_query($conn,$strSQL);
	$rowDDH=mysqli_fetch_array($dondathang);
	$dondathang=$rowDDH[0];
?>