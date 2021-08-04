
<?php
	$strSQL="SELECT * FROM loai_giay";
	$loai_giay=mysqli_query($conn,$strSQL);
	
	//phan hien thi trang them va sua
	if(isset($_POST['chentrang']))
	{
		$chucnang=$_POST['chentrang'];
		if($chucnang=='themloaigiay')
			include_once('loaigiay/themloaigiay.php');
		if($chucnang=='sualoaigiay')
			include_once('loaigiay/sualoaigiay.php');
	}
?>

<table width="750" cellpadding="2" cellspacing="0" border="0" class="admintable" style="border-right:#E9E9E9 1px solid; border-top:#E9E9E9 1px solid;" align="right">
	<tr>
		<th width="40" align="center" style="border-left:#66A111 solid 1px;">
			STT
		</th>
		<th width="90" align="center">
			Mã Loại Giày
		</th>
		<th width="420">
			Tên Loại Giày
		</th>
		<th width="200" colspan="2" style="background:#FFFFFF;" align="center">
			<a href="#" onclick="goithem_sua('themloaigiay')">Thêm Loại Giày Mới</a>
		</th>
	</tr>
	<?php $i=0; ?>
		<?php while($row=mysqli_fetch_array($loai_giay)) { $i+=1; ?>
	<tr>
	<?php 
		//xu ly mau cho dong
			if($i%2==0) 
				$mausac="style='background:#F8F8F8;'";
			 else 
			 	$mausac="style='background:#FFFFFF;'";
	?> 
		<td <?php echo $mausac; ?> >
			<?php echo $i; ?>
		</td>
		<td <?php echo $mausac; ?> >
			<?php echo $row['ma_loai']; ?>
		</td>
		<td <?php echo $mausac; ?> >
			<a href="#" onclick="goithem_sua('sualoaigiay',<?php echo $row['ma_loai']; ?>)"><?php echo $row['ten_loai']; ?></a>
		</td>
		<td width="100" align="center" <?php echo $mausac; ?>>
			<a href="#" onclick="goithem_sua('sualoaigiay',<?php echo $row['ma_loai']; ?>)">Sửa</a>
		</td>
		<td width="100" align="center" <?php echo $mausac; ?>>
			<a href="#" onclick="xoa_loaigiay(<?php echo $row['ma_loai']; ?>)">Xóa</a>
		</td>
	</tr>
		<?php } ?>
	
</table>

<form action="" method="post" name="loaigiay">
	<input name="maloaigiay" type="hidden" value="" />
	<input name="trangchuyen" type="hidden" value="xlloaigiay" />
	<input name="goihamxuly" type="hidden" value="xoaloaihang" />
</form>
<form action="" method="post" name="themvssua">
	<input name="chentrang" type="hidden" value="" />
	<input name="maloaigiay" type="hidden" value="" />
	<input name="trangchuyen" type="hidden" value="quanlyloaigiay" />
</form>
<script>
	function xoa_loaigiay(maloaigiay)
	{
		loaigiay.maloaigiay.value=maloaigiay
		if(confirm('bạn có muốn xóa mục này không..!'))
		loaigiay.submit()
	}
	function goithem_sua(trangthem,maloagiay)
	{
		themvssua.chentrang.value=trangthem
		themvssua.maloaigiay.value=maloagiay
		themvssua.submit()
	}

</script>
