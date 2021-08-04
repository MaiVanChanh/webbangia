<?php
	$strSQL="SELECT * FROM loai_giay";
	$loaigiay=mysqli_query($conn,$strSQL);
	
	$strSQL="SELECT * FROM giay";
	$giay=mysqli_query($conn,$strSQL);
	
	if(isset($_POST['txttim']))
		$tukgiay=$_POST['txttim'];
		
	if(isset($_POST['txtmota']))
		$mota=$_POST['txtmota'];
		
	if(isset($_POST['loaigiay']))
		$maloaigiay=$_POST['loaigiay'];
	
	
?>
<div style="width:100%px; margin-left:3px; margin-right:3px;">
	<table width="99.5%" border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td style="height:25px; background:url(images/trang.jpg) repeat-x; text-align : center; font-size: 22px;" align="center" class="ht" colspan="3"; >
				Tìm Kiếm Nâng Cao
			</td>
		</tr>
		<tr>
			<td>
				<form action="" method="post" name="timkiem_nangcao">
					<input name="view" type="hidden" value="timnangcao" />
					<table width="100%" height="120" cellpadding="0" cellspacing="0" border="0" style="border:#CCCCCC 1px solid; margin-top:3px;">
					<tr>
					  <td height="30" width="30%" align="center">
					  	Tên Sản Phẩm
						</td>
						 <td height="30" width="70%">
							<input name="txttim" type="text" id="txttim" style="width:300px;" value="">
						</td>
				</tr>
				<tr>
					<td align="center">
						Mô Tả
						</td>
						<td>		
							<input name="txtmota" type="text" id="txtmota" style="width:300px;" value="">
					</td>
				</tr>
				<tr>
					<td align="center">		
						Loại Quả
					</td>
					<td>
							<select name="loaigiay">
                              <option value="0">----Loại Giày----</option>
							 <?php while($row=mysqli_fetch_array($loaigiay)) { ?>
								<?php if($row['ma_loai']==$maloaigiay) { ?>
							  	<option value="<?php echo $row['ma_loai']; ?>" selected="selected" ><?php echo $row['ten_loai']; ?></option>
								<?php } else { ?>
								<option value="<?php echo $row['ma_loai']; ?>"><?= $row['ten_loai']; ?></option>
							  <?php } ?>
							 <?php } ?>
                            </select>						
							</td>
				</tr>
				<tr>	
					<td colspan="2" align="center">		
							<input name="Button" type="button" style="background:#FFFFFF; width:100px;" value="Tìm" 
							onClick="timkiemnangcao_onsubmit()">
					</td>

					</tr>
					</table>
				</form>
			</td>
		</tr>
	</table>
</div>
	<script>
		function timkiemnangcao_onsubmit()
		{
		timkiem_nangcao.submit()
		}
	</script>
