
<?php

	$thongbao="";
		if(isset($_POST['goihamxuly']))
		{
			$lenhsuly=$_POST['goihamxuly'];		
			if($lenhsuly=='themgiay')
				$thongbao=them_giay();	
			else if($lenhsuly=='xoagiay')
				$thongbao=xoa_giay();	
			else if($lenhsuly=='suagiay')
				$thongbao=sua_giay();				
		}
//ham xoa giay
function xoa_giay()
{
	global $conn;
		if(isset($_POST['magiay']))
		$magiay=$_POST['magiay'];
		//kiem tra loai giayy co ton tai trong chi tiet don dat hang nao khong
		$strSQL="SELECT COUNT(*) FROM ct_dondathang WHERE ma_giay ='{$magiay}'";
		$ctdathang=mysqli_query($conn,$strSQL);
		$row=mysqli_fetch_array($ctdathang);
		if($row[0]>0)
			return "Bạn Không Thể Xóa Giày Đã Có Trong Chi Tiết Hóa Đơn!";
		//neu khong co the xoa
		$strSQL="DELETE FROM giay WHERE ma_giay={$magiay}";
		mysqli_query($conn,$strSQL);
		return "Đã Xóa Thành Công";
}		
//ham them giay
function them_giay()
{
	global $conn;
		if(isset($_POST['tengiay']))
			$tengiay=$_POST['tengiay'];
			
		if(isset($_POST['loaigiay']))
			$loaigiay=$_POST['loaigiay'];	
		
		if(isset($_POST['giagiay']))
			$giagiay=$_POST['giagiay'];
			
		if(isset($_POST['mota']))
			$mota=$_POST['mota'];
			
		if(isset($_POST['hinhanh']))
			$hinhanh=$_POST['hinhanh'];
		
		if(isset($_POST['trangthai']))
			$trangthai=$_POST['trangthai'];
			
		//kiem tra xem ten giay co bi trung hay khong
		$strSQL="SELECT COUNT(*) FROM giay WHERE ten_giay='{$tengiay}'";
		$giay=mysqli_query($conn ,$strSQL);
		$row=mysqli_fetch_array($giay);
		
		if($row[0]>0)
			return "Tên Giày Đã Tồn Tại, Bạn Hãy Chọn Tên Khác";
		//neu khong trung ten luu vao csdl
		
		$strSQL="INSERT INTO giay (ten_giay,ma_loai,gia,mo_ta,hinh_anh,trang_thai) 
			VALUES ('{$tengiay}','{$loaigiay}','{$giagiay}','{$mota}','{$hinhanh}','{$trangthai}')";
		mysqli_query($conn,$strSQL);
			
			return "Đã Thêm Thành Công Giày Vào Cơ Sở Dữ Liệu";
		
}
function sua_giay()
{
	global $conn;
		if(isset($_POST['magiay']))
			$magiay=$_POST['magiay'];
			
		if(isset($_POST['tengiay']))
			$tengiay=$_POST['tengiay'];
			
		if(isset($_POST['loaigiay']))
			$loaigiay=$_POST['loaigiay'];	
		
		if(isset($_POST['giagiay']))
			$giagiay=$_POST['giagiay'];
			
		if(isset($_POST['mota']))
			$mota=$_POST['mota'];
			
		if(isset($_POST['hinhanh']))
			$hinhanh=$_POST['hinhanh'];
			
		if(isset($_POST['trangthai']))
			$trangthai=$_POST['trangthai'];
			
		//kiem tra xem ten giay co bi trung hay khong
		$strSQL="SELECT COUNT(*) FROM giay WHERE ten_giay='{$tengiay}'";
		$giay=mysqli_query($conn,$strSQL);
		$row=mysqli_fetch_array($giay);
		if($row[0]>0)
			return "Tên giay Đã Tồn Tại, Bạn Hãy Chọn Tên Khác";
		
		//neu khong trung ten luu thong tin da thay  vao csdl
		
		$strSQL="UPDATE giay SET ten_giay='{$tengiay}',ma_loai={$loaigiay},gia='{$giagiay}',mo_ta='{$mota}',hinh_anh='{$hinhanh}',trang_thai='{$trangthai}'
			WHERE ma_giay={$magiay}";
	mysqli_query($conn,$strSQL);
			
			return "Đã Lưu Thành Công Thay Đỗi Của Bạn";
		
}

//in thong bao

if($thongbao !="")
{
echo "<div style='width:100%; margin-left:3px; margin-right:3px;'>";
echo "<table width='100%' cellpadding='0' cellspacing='0' border='0' style='border:#E9E9E9 1px solid; margin-top:3px;'>";
echo "<tr>";
echo "<td>";

echo "<p class='pp'><center><span style='color:#FF9900;'>{$thongbao}</span>"; 
echo "<br />";
echo "<br />";
?>
<center><a href="#" onclick="adm_chuyentrang('quanlygiay')">Bấm Vào Đây Để Về Trang Quản Lý Giày</a></center>
<?php
echo "</p>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</div>";
}
?>