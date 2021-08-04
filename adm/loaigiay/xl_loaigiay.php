<?php
	$thongbao="";
	if(isset($_POST['goihamxuly']))
	{
		$lenhxuly=$_POST['goihamxuly'];
		if($lenhxuly=='xoaloaihang')
			$thongbao=xoa_loai_giay();
		else if($lenhxuly=='themloaihang')
			$thongbao=them_loai_giay();
		else if($lenhxuly=='sualoaigiay')
			$thongbao=sua_loai_giay();
	}
// ham xoa loai giay
function xoa_loai_giay()
{
	global $conn;
	if(isset($_POST['maloaigiay']))
		$maloaigiay=$_POST['maloaigiay'];
	//kiem tra xem loai giay co lien quan den 
	$strSQL="SELECT COUNT(*) FROM giay WHERE ma_loai={$maloaigiay}";
	$giay=mysqli_query($conn,$strSQL);
	$row=mysqli_fetch_array($giay);
	
	if($row[0]>0)
		return "Không Thể Xóa Loại giay Đã Có Sản Phẩm";
	//neu khong co giay lien quan thi co the xoa
	$strSQL="DELETE FROM loai_giay WHERE ma_loai={$maloaigiay}";
	mysqli_query($conn,$strSQL);
	return "Xóa Thành Công Loại giay";
}
// ham them loai giay
function them_loai_giay()
{
	global $conn;
	if(isset($_POST['tenloaigiay']))
		$tenloaigiay=$_POST['tenloaigiay'];
	//kiem tra loai giay co trung ten voi loai giay da co hay ko
		$strSQL="SELECT COUNT(*) FROM loai_giay WHERE ten_loai ='{$tenloaigiay}'";
		$loaigiay=mysqli_query($conn,$strSQL);
		$row=mysqli_fetch_array($loaigiay);
		if($row[0]>0)
			return "Loại giay Này Đã Tồn Tại! Bạn Hãy Chon Tên Khác";
	//neu khong trung ten luu vao csdl
		
		if($tenloaigiay == "")
		{
			return "Không Thành Công bạn cần nhập thông tin ";
		}
		else{
			$strSQL="INSERT INTO loai_giay(ten_loai) VALUES('{$tenloaigiay}')";
		mysqli_query($conn,$strSQL);
			return "Thêm Thành Công Loai giay: {$tenloaigiay} Vào Cơ Sở Dữ Liệu!";
			
		}
	
}
// ham sua loai giay
function sua_loai_giay()
{	
	global $conn;
	if(isset($_POST['maloaigiay']))
		$maloaigiay=$_POST['maloaigiay'];
	if(isset($_POST['tenloaigiay']))
		$tenloaigiay=$_POST['tenloaigiay'];
	//kiem tra loai giay co trung ten voi loai giay da co hay ko
		$strSQL="SELECT COUNT(*) FROM loai_giay WHERE ten_loai ='{$tenloaigiay}'";
		$loaigiay=mysqli_query($conn,$strSQL);
		$row=mysqli_fetch_array($loaigiay);
		if($row[0]>0)
			return "Loại giay Này Đã Tồn Tại! Bạn Hãy Chon Tên Khác";
	//neu khong trung ten luu vao csdl
		
		$strSQL="UPDATE loai_giay SET ten_loai='{$tenloaigiay}' WHERE ma_loai={$maloaigiay}";
		mysqli_query($conn,$strSQL);
		
		return "Sửa Thành Công!";
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
<center><a href="#" onclick="adm_chuyentrang('quanlyloaigiay')">Bấm Vào Đây Để Về Trang Quản Lý Loại Giày</a></center>
<?php
echo "</p>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</div>";
}

?>
