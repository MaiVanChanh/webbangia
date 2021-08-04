
<?php
	//tim kiem nhanh
	$dieukien="";
	$tukhoa="";
	$strSQL="SELECT * FROM loai_giay";
	$loaigiay=mysqli_query($conn,$strSQL);
	//kiem tra xem ten giay co duoc nhap vao hay khong
	if(isset($_POST['txttukhoa']))
		{
			$tukgiay=$_POST['txttukhoa'];
			if($tukhoa!="")
			$dieukien="ten_giay Like '%{$tukhoa}%'";
		}	
	//kiem tra ma loai giay co duco nhap vao hay khong
		if(isset($_POST['loaigiay']))
		{
			$maloaigiay=$_POST['loaigiay'];
			if($maloaigiay!="0")
				{
					if($dieukien!="")
						$dieukien=$dieukien."AND ma_loai = {$maloaigiay}";
					else
						$dieukien="ma_loai = {$maloaigiay}";	
				}
			
		}
		if($dieukien!="")
		$dieukien="WHERE ".$dieukien;
	//phan hien thi trang them va sua
	if(isset($_POST['chentrang']))
	{
		$chucnang=$_POST['chentrang'];
		if($chucnang=='themgiay')
			include_once('themgiay.php');
		else if($chucnang=='suagiay')
			include_once('suagiay.php');
	}

//phan trang
$strSQL="SELECT count(*) FROM giay {$dieukien}";
	$giay=mysqli_query($conn,$strSQL);
	$row=mysqli_fetch_array($giay);
	$sodong=$row[0];
	
	$kichthuoctrang=10;
		if(($sodong%$kichthuoctrang)==0)
				$tongsotrang=$sodong/$kichthuoctrang;
		else
				$tongsotrang=($sodong/$kichthuoctrang)+1;
			
			
	if(!isset($_POST['tranghienhanh']) || $_POST['tranghienhanh']=="1")
		{
			$dongbatdau=0;
			$tranghienhanh=1;
		}
	else
		{
			$dongbatdau=($_POST['tranghienhanh']-1)*$kichthuoctrang;
			$tranghienhanh=$_POST['tranghienhanh'];
		}
	
	$strSQL="SELECT * FROM giay {$dieukien} ORDER BY ma_giay desc Limit {$dongbatdau},{$kichthuoctrang}";
	$giay=mysqli_query($conn,$strSQL);
?>
<form name="timgiay" action="" method="post">
<table width="450" cellpadding="2" cellspacing="0" border="0" align="right" bgcolor="#66A111" style="color:#FFFFCC"> 
<tr><td>
Tìm Kiếm Giày:&nbsp;&nbsp;
</td><td>
<input type="text" name="txttukhoa" id="txttukhoa" style="width:150px;" value="" />
</td><td>
							<select name="loaigiay">
                              <option value="0">----Tên Loại Giày----</option>
							 <?php while($row=mysqli_fetch_array($loaigiay)) { ?>
								<?php if($row['ma_loai']==$maloaigiay) { ?>
							  	<option value="<?php echo $row['ma_loai']; ?>" selected="selected" ><?php echo $row['ten_loai']; ?></option>
								<?php } else { ?>
								<option value="<?php echo $row['ma_loai']; ?>"><?php echo $row['ten_loai']; ?></option>
							  <?php } ?>
							 <?php } ?>
                            </select>					
</td>
<td>
<input name="trangchuyen" type="hidden" value="quanlygiay" />
<input type="submit" value="Tìm" name="submit" />
</td></tr></table>
</form>

<table width="750" cellpadding="2" cellspacing="0" border="0" class="admintable" style="border-right:#E9E9E9 1px solid; border-top:#E9E9E9 1px solid;" align="right">
	<tr>
		<th width="40" align="center" style="border-left:#66A111 solid 1px;">
			STT
		</th>
		<th width="90" align="center">
			Mã Giày
		</th>
		<th width="220">
			Tên Giày
		</th>
		<th width="200">
			Thuộc Loại
		</th>
		<th width="200" colspan="2" style="background:#FFFFFF;" align="center">
			<a href="#" onclick="them_suagiay('themgiay')">Thêm Giày Mới</a>
		</th>
	</tr>
	<?php $i=$dongbatdau; ?>
		<?php while($row=mysqli_fetch_array($giay)) { $i+=1; ?>
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
			<?php echo $row['ma_giay']; ?>
		</td>
		<td <?php echo $mausac; ?> >
			<a href="#" onclick="them_suagiay('suagiay',<?php echo $row['ma_giay']; ?>)">
			<?php echo $row['ten_giay']; ?></a>
			
			<?php
				// hien trang thai cua giay
				if($row['trang_thai']==1)
					echo "<img src='../images/hot.gif' border='0'>";
			?>
		</td>
		<td <?php echo $mausac; ?> >
			<?php
				$strSQL="SELECT * FROM loai_giay WHERE ma_loai=$row[ma_loai]";
				$loaigiay=mysqli_query($conn,$strSQL);
				$rowloai=mysqli_fetch_array($loaigiay);
				echo $rowloai['ten_loai'];
			?>
		</td>
		<td width="100" align="center" <?php echo $mausac; ?>>
			<a href="#" onclick="them_suagiay('suagiay',<?php echo $row['ma_giay']; ?>)">Sửa</a>
		</td>
		<td width="100" align="center" <?php echo $mausac; ?>>
			<a href="#" onclick="xoa_giay(<?php echo $row['ma_giay']; ?>)">Xóa</a>
		</td>
	</tr>
		<?php } ?>
	<tr>
		<td colspan="6" height="30" align="center">
			<?php if((int)$tongsotrang>1) { ?>
				<?php 
					//xu ly review trang
					if((int)$tranghienhanh!=1)
					{
				?>
					<a href="#" class="page" onclick="sotrang(<?php echo $tranghienhanh-1 ?>) "> <img src="../images/review.jpg" border="0" /></a> 
					<?php } ?>
			
			<?php for($i=1; $i<=$tongsotrang; $i++ ) { ?>
				<?php if ((int)$tranghienhanh==$i) { ?>
					<a href="#" class="tranghientai" onclick="sotrang(<?php echo $i; ?>)"> <?php echo $i; ?></a>
					<?php } else  {?>	
					<a href="#" class="phantrang" onclick="sotrang(<?php echo $i; ?>)"> <?php echo $i; ?></a>
				<?php } ?>	
			<?php } ?>
				<?php 
					//xu ly next trang
					if((int)$tranghienhanh!=(int)$tongsotrang)
					{
					?>
				<a href="#" class="page" onclick="sotrang(<?php echo $tranghienhanh+1 ?>) "> <img src="../images/next.jpg" border="0" /></a>		
					<?php } ?>
		<?php } ?>		
			
		<?php if((int)$tongsotrang>1) { ?>
		  <select name="select" onchange="sotrang(this.value)" >
	   	   	<?php for($i=1; $i<=$tongsotrang; $i++ ) { ?>
					<?php if ($tranghienhanh==$i) { ?>
						<option value="<?php echo $i; ?>" selected="selected">Trang  <?php echo $i; ?></option>
					<?php } else  {?>
						<option value="<?php echo $i; ?>" >Đến Trang  <?php echo $i; ?></option>
					<?php } ?>			
			<?php } ?>			   
	   	</select> 
		<?php } ?>	
		</td>
	</tr>
</table>
<form action="" method="post" name="themvssua">
	<input name="chentrang" type="hidden" value="" />
	<input name="magiay" type="hidden" value="" />
	<input name="trangchuyen" type="hidden" value="quanlygiay" />
</form>

<form action="" method="post" name="xoagiay">
	<input name="magiay" type="hidden" value="" />
	<input name="goihamxuly" type="hidden" value="xoagiay" />
	<input name="trangchuyen" type="hidden" value="xlgiay" />
</form>

<script>

	function them_suagiay(trangthem,mah)
	{
		themvssua.chentrang.value=trangthem
		themvssua.magiay.value=mah
		themvssua.submit()
	}
	function xoa_giay(mah)
	{
		xoagiay.magiay.value=mah
		if(confirm('bạn có thực sự muốn xóa không!'))
		xoagiay.submit()
	}
</script>


<form name="hung1" method="post" action="">
	<input type="hidden" name="tranghienhanh" value="" />
	<input type="hidden" name="trangchuyen" value="quanlygiay" />
</form>
<script>
	function sotrang(trang,masp)
	{
		hung1.tranghienhanh.value=trang
		hung1.submit()
	}
</script>