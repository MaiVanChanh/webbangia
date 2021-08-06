<?php
	
	$strSQL="SELECT * FROM loai_giay" ;
	$loaigiay=mysqli_query($conn,$strSQL);
?>
<style type="text/css">
	tr td{
		text-align: left;
	}
		#left{
		width:148px;
		}

		#left h1{
		background:#99CC00;
		color:#FFFFFF;
		font-size:14px;
		text-align:center;
		padding: 10px;
		}

		#left ul{
		list-style-type:none;
		margin:0px;
		padding:0px;
		}

		#left ul a{
		text-decoration:none;
		line-height:25px;
		color:#f26522;
		background:#EEEEEE;
		display:block;
		width:133px;
		border-top:1px solid #FFFFFF;
		border-bottom:1px solid #CCCCCC;
		padding-left:15px;
		font-size: 14px;
		font-weight: bold;
		}

		#left ul a:hover{
		background:#66A111;
		color: white;
		}
</style>
<div id="left">
    <h1>DANH MỤC</h1>
    <ul>
		<?php while($row=mysqli_fetch_array($loaigiay)) { ?> 
		    <li><a href="#" onclick="loaigiay_onsubmit('<?php echo $row['ma_loai']; ?>')"><?php echo $row['ten_loai']; ?></a></li>
		<?php } ?>
    </ul>
</div>

	<form action="" method="post" name="loaigiay">
	<input name="MaLH" type="hidden" value="" />
	<input name="gia" type="hidden" value="" />
	<input name="view" type="hidden" value="sanpham" />
	</form>
	<script>
		function loaigiay_onsubmit(thamso)
		{
		loaigiay.MaLH.value=thamso
		loaigiay.view.value="/sanpham"
		loaigiay.submit()
		}
		
		function timgia_onsubmit(gia)
		{
		loaigiay.gia.value=gia
		loaigiay.view.value="/sanpham"
		loaigiay.submit()	
		}
	</script>
<table width="147" border="0" cellpadding="0" cellspacing="0" style="padding-top:5px;">
		<tr>
			<td style="height:25px; background:url(images/trang.jpg) repeat-x;font-weight:bold" align="left" class="ht" colspan="3">
				&nbsp;&nbsp;<img src="images/no.gif" border="0" width="16" height="16" align="bottom"/>
				&nbsp;&nbsp;Giá Sản Phẩm
			</td>
		</tr>
		<tr>
			<td>
		<div class="menuleft">
			<a href="#" onclick="timgia_onsubmit('mot')">Dưới 200.000đ</a>
			<a href="#" onclick="timgia_onsubmit('hai')">200.000đ - 550.000đ</a>
			<a href="#" onclick="timgia_onsubmit('ba')">550.000đ - 1.000.000đ</a>
			<a href="#" onclick="timgia_onsubmit('bon')">1.000.000đ - 1.500.000đ</a>
			<a href="#" onclick="timgia_onsubmit('nam')">1.500.000đ - 2.000.000đ</a>
			<a href="#" onclick="timgia_onsubmit('sau')">Trên 2.000.000đ</a>
		</div>
			</td>
		</tr>
</table>
<?php include('include/thongke.php'); ?>
<table width="147" border="0" cellpadding="0" cellspacing="0" style="padding-top:5px;">
		<tr>
			<td style="height:25px; background:url(images/trang.jpg) repeat-x;font-weight:bold" align="left" class="ht" colspan="3">
				&nbsp;&nbsp;<img src="images/no.gif" border="0" width="16" height="16" align="bottom"/>
				&nbsp;&nbsp;Thống Kê
			</td>
		</tr>
		<tr>
			<td style="margin-top:4px; width:147px;font-size:14px ;padding:10px; background:#66A111; color:#FFFFCC;">
		
			Có : <?php echo $soloaigiay; ?>  Loại Giày
			<br />
			Với : <?php echo $sogiay; ?>  Sản Phẩm 	
			<br />
			Tổng : <?php echo $khachhang; ?>  Người dùng 
	
			</td>
		</tr>
		
</table>
