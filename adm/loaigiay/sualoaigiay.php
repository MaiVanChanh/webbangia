<?php
	if(isset($_POST['maloaigiay']))
		$maloaigiay=$_POST['maloaigiay'];
		
	$strSQL="SELECT * FROM loai_giay WHERE ma_loai={$maloaigiay}";
	$loaigiay=mysqli_query($conn,$strSQL);
	$row=mysqli_fetch_array($loaigiay);
?>
<form action="" method="post" name="themloaigiay">
<table cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
		<td align="center" colspan="2" height="35">
		Sửa Tên Loại Sản Phẩm
		</td>
	</tr>
	<tr>
		<td align="right"  height="30">
				<input name="tenloaigiay" type="text" value="<?php echo $row['ten_loai']; ?>" style="width:200px;" maxlength="30">
		</td>
		<td align="left"  height="30">
				<input name="trangchuyen" type="hidden" value="xlloaigiay" />
				<input name="goihamxuly" type="hidden" value="sualoaigiay" />
				<input name="maloaigiay" type="hidden" value="<?php echo $row['ma_loai']; ?>" />
				
		  		<input type="submit" name="Submit" value="Sửa" style="background:#FFFFFF; width:100px;">
		 </td>
	</tr>
</table>
				
</form>
